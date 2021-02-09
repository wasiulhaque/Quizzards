<?php

namespace App\Http\Controllers;

use App\Charts\resultChart;
use App\questionTable;
use App\quizEnroll;
use Illuminate\Http\Request;

class quizEnrollController extends Controller
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
        print_r($request->input());

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
    public function update(Request $request)
    {
        //
        $id = $request->input('question_id');
        $getQuestion = questionTable::where('question_id', $id)->get();
        return view('Teacher.updateInput', compact('id'))->with('getQuestion', $getQuestion);
    }

    public function updateQuestion(Request $request)
    {
        $exam_id = $request->input('exam_code');
        print_r($exam_id);
        $answerScript = questionTable::where('exam_id', $exam_id)->get();
        return view('Teacher.updateQuestion', compact('exam_id'))->with('answerScript', $answerScript);
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

    public function showChart(Request $request)
    {
        $quiz_id = $request->input('quiz_id');
        $result = quizEnroll::where('total_marks', $quiz_id)->pluck('student_name', 'result');

        //print_r($result);
        $chart = new resultChart;
        $chart->labels($result->values());
        $chart->dataset('By the Name of Allah', 'bar', $result->keys());
        return view('chart.charts', compact('chart'));

    }

    public function interMediateReq(Request $request)
    {
        $temp = $request->input('teacher_id');
        return view('Teacher.addExam', compact('temp'));


    }

    public function showUpdate(Request $request)
    {
        $idNumber = $request->input('teacher_id');
        return view('Teacher.updateIntermediate', compact('idNumber'));
    }


    public function updateLast(Request $request)
    {
        $title = $request->input('question_name');
        print_r(10);
    }

    public function ok(Request $request)
    {
        $temp = $request->input('exam_id');
        print_r($temp);
        $table = questionTable::where('question_id', $temp)
            ->update(['correct_answer' => $request->input('correct_answer')]);

        $table = questionTable::where('question_id', $temp)
            ->update(['option_A' => $request->input('option_A')]);
        $table = questionTable::where('question_id', $temp)
            ->update(['option_B' => $request->input('option_B')]);
        $table = questionTable::where('question_id', $temp)
            ->update(['option_C' => $request->input('option_C')]);
        $table = questionTable::where('question_id', $temp)
            ->update(['option_D' => $request->input('option_D')]);
        $table = questionTable::where('question_id', $temp)
            ->update(['question_title' => $request->input('question_title')]);





        print_r($request->input('option_A'));
        print_r($request->input('option_B'));
        print_r($request->input('option_C'));
        print_r($request->input('option_D'));

    }
}
