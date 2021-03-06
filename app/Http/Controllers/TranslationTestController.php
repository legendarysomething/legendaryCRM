<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Purifier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        // To fix the bug where page wont show when a user views it for the first time
        if($test_status->wasRecentlyCreated){
            $test_status = TestStatus::where('user_id',Auth::user()->id)->first();
        }

        return view('pages.translations_test.translations_test',compact('test_status'));
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

        $this->validate(request(),['submission' => 'required']);

        $input = $request->only(['submission','test_num']);
        $input['submission'] = clean($input['submission']);


        // Store submission into the database
        TestSubmission::create([
            'user_id'   => auth()->id(),
            'body'      => $input['submission'],
            'test_num'  => $input['test_num'],
        ]);

        // Update Test Status
        TestStatus::where('user_id', Auth::user()->id)
            ->update(['status' => 1]);

        // Send Submission to Google Drive
        // $filename = "Translation Test";          
        // $this->store_to_gdrive($filename,$input['submission']);

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


    /**
     * Stores the submission in gdrive in a folder named after the user
     *
     */
    private function store_to_gdrive($filename,$submission)
    {

        $folder = Auth::user()->name;
        // Get root directory contents...
        $contents = collect(Storage::cloud()->listContents('/', false)); 
        // Find the folder
        $dir = $contents->where('type', '=', 'dir')
            ->where('filename', '=', $folder)
            ->first();
        // If no directory is found, make one and select it
        if (!$dir) {
            Storage::cloud()->makeDirectory($folder);
            $contents = collect(Storage::cloud()->listContents('/', false)); 
            $dir = $contents->where('type', '=', 'dir')
                ->where('filename', '=', $folder)
                ->first();
        }

        Storage::cloud()->put($dir['path'].'/'.$filename, $submission);
    }





}
