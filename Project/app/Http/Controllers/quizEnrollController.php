<?php

namespace App\Http\Controllers;

use App\Charts\resultChart;
use App\questionTable;
use App\quizEnroll;
use App\quizTable;
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
        $idNumber = $request->input('teacher_id');
        $examCode=$request->input('exam_code');
   /*     print_r($idNumber);
        print_r('exam');
        print_r($examCode);*/
        $table=quizTable::where('teacher_id',$idNumber)->where('quiz_id',$examCode)->count();


     if($table>0){

            $answerScript = questionTable::where('exam_id', $exam_id)->get();
            return view('Teacher.updateQuestion', compact('exam_id'))->with('answerScript', $answerScript);

        }
    else{
            print_r("Enter Correct Number");
        }
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
        $chart->dataset('Result', 'bar', $result->keys());
        return view('chart.charts', compact('chart'));

    }

    public function interMediateReq(Request $request)
    {
        $temp = $request->input('teacher_id');
        $exam_code=$request->input('exam_code');
        return view('Teacher.addExam', compact('temp'));

/*        $table=quizTable::where('quiz_id',$exam_code)->where('teacher_id',$temp)->count();
        if($table>0){

        }
        else{
            $newTable=quizTable::where('quiz_id',$exam_code)->count();
            $insert=new quizTable;
            $insert->id=rand(0,1000);
            $insert->quiz_id=$exam_code;
            $insert->teacher_id=$temp;
            $insert->save();
            print_r($newTable);
] */







    }

    public function showUpdate(Request $request)
    {
        $idNumber = $request->input('teacher_id');
        $examCode=$request->input('exam_code');

        $table=quizTable::where('teacher_id',$idNumber)->where('quiz_id',$examCode)->count();
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
/*        print_r($temp);*/
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





    /*    print_r($request->input('option_A'));
        print_r($request->input('option_B'));
        print_r($request->input('option_C'));
        print_r($request->input('option_D'));*/

    }

    public function search(Request $request){
        $exam_code=$request->input('teacher_id');
        return view('Teacher.search_exam_teacher',compact('exam_code'));


    }
}
