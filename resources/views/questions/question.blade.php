@extends('layouts.app')
@section('content')
    <html>


    <form action="submit" method="post">


        @csrf
        <input type="hidden" id="exam_id" name="exam_id" value="{{$idNumber}}">
        <label for="exam_id">Exam Id</label>
        {{--@for($i=0;$i<20;$i++)--}}
            <br>
            <input type="text" id="question_name" name="question_name">
            <label for="question_name">Question</label><br>
            <input type="text" id="option_A" name="option_A">
            <label for="option_A">Option A</label><br>
            <input type="text" id="option_B" name="option_B">
            <label for="option_B">Option B</label><br>
            <input type="text" id="option_C" name="option_C">
            <label for="option_C">Option C</label><br>
            <input type="text" id="option_D" name="option_D">
            <label for="option_D">Option D</label><br>

            <input type="text" id="correctAnswer" name="correctAnswer">
            <label for="correctAnswer">Correct Answer</label><br>
            <br>
        {{--@endfor--}}
        <input type="submit" name="submit" id="submit">
        <label for="submit">Submit</label>

    </form>
    </html>
@endsection
