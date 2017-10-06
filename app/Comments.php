<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //

    public function test_submission()
    {
    	return $this->belongsto(TestSubmission::class);
    }
}
