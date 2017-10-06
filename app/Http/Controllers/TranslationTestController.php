<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Purifier;
use Illuminate\Support\Facades\Auth;

use App\TestSubmission;
use App\TestStatus;

class TranslationTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Creates a test status row if one doesn't already exist
        $test_status = TestStatus::firstOrCreate([
            'user_id' => Auth::user()->id
        ]);


        return view('pages.general.translations_test');
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

        $this->validate(request(),[
            'submission' => 'required',
        ]);

        $input = $request->only(['submission','test_num']);
        $input['submission'] = clean($input['submission']);

        // Store submission into the database
        TestSubmission::create([
            'user_id'   => auth()->id(),
            'body'      => $input['submission'],
            'test_num'  => $input['test_num'],
        ]);

        // Update Test Status




        return redirect()->route('translationstest');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
