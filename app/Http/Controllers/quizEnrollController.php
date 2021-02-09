<?php

namespace App\Http\Controllers;

use App\Charts\resultChart;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        print_r($request->input());

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
    public function showChart(Request $request){
        $quiz_id=$request->input('quiz_id');
        $result=quizEnroll::where('total_marks',$quiz_id)->pluck('student_name','result');

        //print_r($result);
        $chart=new resultChart;
        $chart->labels($result->values());
        $chart->dataset('By the Name of Allah','bar',$result->keys());
        return view('chart.charts',compact('chart'));

    }
    public function interMediateReq(Request $request){
        $temp=$request->input('teacher_id');
        return view('Teacher.addExam',compact('temp'));



    }
    public function showUpdate(Request $request){
        $idNumber=$request->input('teacher_id');
        return view('check',compact('idNumber'));
    }
}
