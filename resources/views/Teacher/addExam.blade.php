@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
    <div class="card-header">{{ __('Add Exam') }}</div>
    <div class="card-body">
    <form action="quizInfo" method="post">
        @csrf
        <div class="form-group row">
        <label for="exam_code">Exam Code</label>
        <div class="col-md-6">
        <input type="text" id="exam_code" name="exam_code">
        </div> </div>
        <input type="hidden" id="teacher_id" name="teacher_id" value="{{$temp}}">
        <div class="form-group row">
        <label for="quiz_title">Quiz Title</label>
        <div class="col-md-6">
        <input type="text" id="quiz_title" name="quiz_title">
        </div> </div>
        <!--    <label for="starting_time">Starting Time</label>
            <input type="time" id="starting_time" name="starting_time">
            <br>
            <label for="ending_time">Ending Time</label>
            <input type="time" id="ending_time" name="ending_time">
            <br>-->
        <div class="form-group row">
        <label for="course">Course</label>
        <div class="col-md-6">
        <input type="text" id="course" name="course">
        </div> </div>
        <label for="topic">Topic</label>
        <input type="text" id="topic" name="topic">
        <br>

        <input type="submit" id="quizInfo" value="Submit" name="quizInfo">
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
