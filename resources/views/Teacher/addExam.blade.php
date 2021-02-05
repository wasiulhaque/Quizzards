@extends('layouts.app')
@section('content')
    <form action="quizInfo" method="post">
     @csrf
    <br>
    <label for="exam_code">Exam Code</label>
    <input type="text" id="exam_code" name="exam_code"  >
    <br>
    <label for="teacher_id">Teacher ID</label>
    <input type="text" id="teacher_id" name="teacher_id">
    <br>
    <label for="quiz_title">Quiz Title</label>
    <input type="text" id="quiz_title" name="quiz_title">
    <br>
<!--    <label for="starting_time">Starting Time</label>
    <input type="time" id="starting_time" name="starting_time">
    <br>
    <label for="ending_time">Ending Time</label>
    <input type="time" id="ending_time" name="ending_time">
    <br>-->

    <label for="course">Course</label>
    <input type="text" id="course" name="course">
    <br>

    <input type="submit" id="quizInfo" value="Submit" name="quizInfo">
    </form>
@endsection
