<?php

namespace App\Http\Controllers;

use App\User;
use App\TestSubmission;
use App\Comments;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TestSubmissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('comments')
            ->with('test_status')
            ->has('test_status')
            ->has('test_submissions')
            ->get();

        return view('pages.admin.submissions.test_submissions',compact('users'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::with('comments.user_owner')->where('id',$id)->firstorfail();
        $submissions = User::findorfail($id)->test_submissions()->get();
        $status = User::findorfail($id)->test_status()->first();
        
        return view('pages.admin.submissions.applicant_profile',
            compact('user','submissions','status'));

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
