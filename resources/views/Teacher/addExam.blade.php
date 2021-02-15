@extends('layouts.app')
@section('content')

<style>
input[type=submit] {
    padding:10px 307px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
input[type=text] {
    padding:10px 60px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

input[type=text]:focus {
    border-color:#333;
}

</style>


<div class = "logincontent">
<div class="container">
<div class="col-md-8">
    <div class="card">
    <div class="card-header">{{ __('Login') }}</div>
    <div class="card-body">
    <form action="quizInfo" method="post">
        @csrf
        <div class="form-group row">
        <label for="exam_code" class="col-md-4 col-form-label text-md-right">Exam Code</label>
        <div class="col-md-6">
        <input type="text" id="exam_code" name="exam_code">
        </div> </div>

        <input type="hidden" id="teacher_id" name="teacher_id" value="{{$temp}}">
        <div class="form-group row">
        <label for="quiz_title" class="col-md-4 col-form-label text-md-right">Quiz Title</label>
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
        <label for="course" class="col-md-4 col-form-label text-md-right">Course</label>
        <div class="col-md-6">
        <input type="text" id="course" name="course">
        </div></div>

        <div class="form-group row">
        <label for="topic" class="col-md-4 col-form-label text-md-right">Topic</label>
        <div class="col-md-6">
        <input type="text" id="topic" name="topic">
        </div></div>

        <input  type="submit" id="quizInfo" value="Proceed" name="quizInfo" >
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
