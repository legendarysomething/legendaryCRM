<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'phonenumber','referrer'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function test_submissions() // $TestSubmission->user->name
    {
        return $this->hasMany(TestSubmission::class);
    }

    public function test_status() // $TestSubmission->user->name
    {
        return $this->hasOne(TestStatus::class);
    }

    public function comments() // $TestSubmission->user->name
    {
        return $this->hasMany(Comments::class,'profile_id')->orderBy('created_at','desc');
    }
}
