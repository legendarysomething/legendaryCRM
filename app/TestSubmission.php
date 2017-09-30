<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSubmission extends Model
{
    //

    public function comments()
    {
    	return $this->hasMany(TestComments::class);
    }
}
