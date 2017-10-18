<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\RoleUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:50|alpha',
            'username' => 'required|string|max:50|unique:users|alpha_num',
            'phonenumber' => 'required|string|max:15',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // Insert into users table
        $user = User::create([
            'username'    => strtolower($data['username']),
            'name'        => $data['name'],
            'email'       => $data['email'],
            'phonenumber' => $data['phonenumber'],
            'referrer'    => $data['referrer'],
            'password'    => bcrypt($data['password']),
        ]);

        // Assign the default role to the user
        $role = Role::where('name','applicant')->get();
        $user->attachRole($role[0]);


        return $user;
    }
}
