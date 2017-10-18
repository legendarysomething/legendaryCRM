<?php

namespace App\Http\Controllers;


use App\Comments;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {   

        $this->validate(request(),['comment' => 'required|max:255']);

        $input = $request->only(['comment']);
        $input['comment'] = strip_tags($input['comment']);

        // Store comment into the database
        Comments::create([
            'user_id'    => auth()->id(),
            'profile_id' => $id,
            'resource_id' => '1',
            'comment'   => $input['comment'],
        ]);

        return Redirect::back();

    }
}
