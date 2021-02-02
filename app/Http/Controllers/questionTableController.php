<?php

namespace App\Http\Controllers;

use App\questionTable;
use App\quizEnroll;
use Illuminate\Http\Request;

class questionTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
           $question=questionTable::all();
           return view('questions.questionTemplate')->with('question',$question);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        print_r($request->input());
        $newQuestion=new questionTable;
        $newQuestion->question_id=10;
        $newQuestion->exam_id=9;
        $newQuestion->question_title=$request->question_name;
        $newQuestion->option_A=$request->option_A;
        $newQuestion->option_B=$request->option_B;
        $newQuestion->option_C=$request->option_C;
        $newQuestion->option_D=$request->option_D;
        $newQuestion->student_answer='A';
        $newQuestion->correct_answer='B';

        echo $newQuestion->save();
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
