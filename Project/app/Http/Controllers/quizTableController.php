<?php

namespace App\Http\Controllers;

use App\quizEnroll;
use App\quizTable;
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
    public function create(Request $request)
    {
        //
        $new = new quizTable;
        $new->id=1;
        $new->quiz_id = 12;
        $new->teacher_id =111;
/*        $new->quiz_title='M';
        $new->marks=27;
        $new->starting_time=time();
        $new->ending_time=time();
        $new->quiz_type='MCQ';
        $new->course='N';
        $new->topic='M';*/

        $new->save();

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
        $idNumber=$request->input('exam_code');
        $new->quiz_title=$request->input('quiz_title');
        $new->marks=$request->input('marks');
        $new->starting_time=time();
        $new->ending_time=time();
        $new->quiz_type='MCQ';
        $new->course=$request->input('course');
        $new->topic=$request->input('topic');


        $temp = $request->input('teacher_id');
        $teacher_id = $request->input('teacher_id');
        $exam_code=$request->input('exam_code');

        $table=quizTable::where('quiz_id',$exam_code)->where('teacher_id',$temp)->count();
        if($table>0){


            return view('questions.question', compact('teacher_id','exam_code'));
        }
    else{
            $newTable=quizTable::where('quiz_id',$exam_code)->count();
            if($newTable>0){
                print_r("The Quiz ID is Taken");
            }
            elseif ($newTable==0) {
                $insert = new quizTable;
                $insert->id = rand(0, 1000);
                $insert->quiz_id = $exam_code;
                $insert->teacher_id = $temp;
                $insert->save();
                return view('questions.question', compact(['idNumber']));
            }
        }

    }

    public function another(Request $request){

        $exam_code=$request->input('exam_id');
        $teacher_id=$request->input('teacher_id');

        return view('questions.question',compact('exam_code','teacher_id'));



    }
    public function finish(Request $request){


        $exam_code=$request->input('exam_id');
        $temp=$request->input('teacher_id');

        return view('Teacher.addExam',compact('temp'));



    }
}
