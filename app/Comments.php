<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $fillable = ['user_id', 'profile_id', 'resource_id', 'comment'];


    public function user_owner()
    {
    	return $this->belongsto(User::class,'user_id');
    }

    public function user_target()
    {
    	return $this->belongsto(User::class,'profile_id');
    }
}
