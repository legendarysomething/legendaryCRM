<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



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
        
        $validation = $this->validator($request->all())->validate();
        
        $user = User::findOrFail($id);

        
        if (Auth::user()->hasRole('superadministrator') && !$user->hasRole(['superadministrator']))
        {
            // Only Allow Superadmins to manage Admin Roles
            // Sync Roles
            $user->syncRoles($request->roles);
        }
        elseif(!$user->hasRole(['superadministrator|administrator']))
        {
            // Do not allow any updates on profiles that are superadmins
            // Sync Roles
            $user->syncRoles($request->roles);
        }
        else
        {
            // Failure Message here
        }

        // Return the user to the user management page
        $roles = Role::where('name', '!=' , 'superadministrator')->get();
        $role_user = User::findOrFail($id)->roles()->get();

        return view('pages.admin.manage_single_user',compact('user','roles','role_user'));


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
