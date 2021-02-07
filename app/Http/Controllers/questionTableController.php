<?php

namespace App\Http\Controllers;

use App\questionTable;
use App\quizEnroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class questionTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
           $answerScript=questionTable::all();

          return view('questions.answer')->with('answerScript',$answerScript);

                //
    }
    function showResult(Request $request){
        $exam_id=$request->input('exam_code');
        $answerScript=questionTable::where('exam_id',$exam_id)->get();

        $count=0;
        foreach (questionTable::where('exam_id',$exam_id)->cursor() as $individual){

            if(strcmp($individual->student_answer,$individual->correct_answer)==0){
                $count++;
            }

        }
        print_r($count);

       /* return view('students.yourResult')->with('count',$count);*/
    }

    public function showQuestion(Request $request){
        $id=$request->input('exam_code');
        $answerScript=questionTable::where('exam_id',$id)->get();
        return view('questions.answer')->with('answerScript',$answerScript);

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

        $temp=rand(0,1000);
        $temp2=rand(0,10000);
        $newQuestion->question_id=$temp2;
        $newQuestion->exam_id=$request->exam_id;
        $newQuestion->question_title=$request->question_name;
        $newQuestion->option_A=$request->option_A;
        $newQuestion->option_B=$request->option_B;
        $newQuestion->option_C=$request->option_C;
        $newQuestion->option_D=$request->option_D;
        $newQuestion->student_answer='E';
        $newQuestion->correct_answer=$request->correctAnswer;

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
        $new=questionTable::find($id);
        $new->student_answer=$request->input('option');

        $new->save();

    }
    public function forgiveMeAllah(Request $request){


     foreach ($request->input('option') as $optionNum=>$optionVal){
         print_r($optionNum);
         print_r($optionVal);
         $new=questionTable::find($optionNum);
         $new->student_answer=$optionVal;
         $new->save();

     }
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
