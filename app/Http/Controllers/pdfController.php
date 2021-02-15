<?php

namespace App\Http\Controllers;

use App\questionTable;
use PDF;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    //
    public function generatePDF(Request $request)
    {
        $data = questionTable::select('question_title', 'student_answer', 'option_A', 'option_B', 'option_C', 'option_D', 'correct_answer')->where('exam_id', $request->input('quiz_id'))->get();


        print_r($request->input('quiz_id'));
        $pdf = PDF::loadView('PDF.pdf', compact('data'));



        foreach (questionTable::where('exam_id',$request->input('quiz_id'))->cursor() as $individual) {

            $individual->student_answer='F';
            $individual->save();
        }
       /* $table = questionTable::where('question_id', $temp)
            ->update(['option_B' => $request->input('option_B')]);
        $table = questionTable::where('question_id', $temp)
            ->update(['option_C' => $request->input('option_C')]);
        $table = questionTable::where('question_id', $temp)
            ->update(['option_D' => $request->input('option_D')]);
        $table = questionTable::where('question_id', $temp)
            ->update(['question_title' => $request->input('question_title')]);*/
        return $pdf->download('result.pdf');
    }

    public function check(Request $request)
    {
        print_r($request->input('quiz_id'));
        foreach (questionTable::where('exam_id',$request->input('quiz_id'))->cursor() as $individual) {

            $individual->student_answer='F';
            $individual->save();
        }
    }

    public function show()
    {
        $data = questionTable::all('question_title', 'student_answer', 'option_A', 'option_B', 'option_C', 'option_D', 'correct_answer');
        return view('PDF.pdf', compact('data'));
    }
}
