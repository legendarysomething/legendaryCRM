<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSubmission extends Model
{
    //
    protected $fillable = ['user_id','body','test_num','test_grade'];

    public function comments()
    {
    	return $this->hasMany(TestComments::class);
    }

    public function users() // $TestSubmission->user->name
    {
    	return $this->belongsTo(User::class);
    }
}
