<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class ManageUsersController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::with('roles')->get();


        return view('pages.admin.manage_users',compact('users')); 

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        // Get all except the superadministrator role
        $roles = Role::where('name', '!=' , 'superadministrator')->get();

        $role_user = User::findOrFail($id)->roles()->get();

                   

        return view('pages.admin.manage_single_user',compact('user','roles','role_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            "roles" => 'required',
            "roles.*" => Rule::in(Role::where('name','!=','superadministrator')->pluck('id')->toArray()),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $request->has('<name of button>');

        // Validate inputs
        $validation = $this->validator($request->all())->validate();
        $user = User::findOrFail($id);

        $errors = array();

        // Only SU can modify admins, no SU's can be modified
        if (Auth::user()->hasRole('superadministrator') && !$user->hasRole(['superadministrator'])) {
            $user->syncRoles($request->roles);
        } elseif(!$user->hasRole(['superadministrator|administrator'])) {
            $user->syncRoles($request->roles);
        } else {
            $errors['permissions'] = 'You are not allowed to manage this account';
        }

        return Redirect::back()->witherrors($errors);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
