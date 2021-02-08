<?php

namespace App\Http\Controllers;

use App\quizEnroll;
use Illuminate\Http\Request;

class quizTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $new = new quizEnroll;
        $new->quiz_id = $request->input('exam_code');
        $new->teacher_id = $request->input('teacher_id');
        $new->quiz_title=$request->input('quiz_title');
        $new->marks=$request->input('marks');
        $new->starting_time=time();
        $new->ending_time=time();
        $new->quiz_type='MCQ';
        $new->course=$request->input('course');
        $new->topic=$request->input('topic');

        $new->save();

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function check(Request $request)
    {

        $new = new quizEnroll;
        $new->quiz_id = $request->input('exam_code');
        $new->teacher_id = $request->input('teacher_id');
        $new->quiz_title=$request->input('quiz_title');
        $new->marks=$request->input('marks');
        $new->starting_time=time();
        $new->ending_time=time();
        $new->quiz_type='MCQ';
        $new->course=$request->input('course');
        $new->topic=$request->input('topic');

        return view('questions.question', compact(['idNumber']));
    }
}
