@extends('layouts.app')
@section('content')
<style>
input[type=submit] {
    padding:10px 30px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
input[type=text] {
    padding:8px 60px; 
    border:2px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

input[type=text]:focus {
    border-color:#333;
}

body {
    text-align: center;
}
form {
    display: inline-block;
}



</style>

<div class = "logincontent">
<div class="container">
<div class="col-md-8">
    <div class="card">
    <div class="card-body">

    <div class="form">
    <form action='search_exam' method="post">
        @csrf
        <div class="form-group row">
        <div class="col-md-6">
        <label for="question_name">Enter Exam Code</label>
        <input type="text" id="exam_code" name="exam_code">
        </div></div>


        <input type="hidden" id="student_name" name="student_name" value="{{$student_name}}">
        <input type="submit" id="exm_submit" name="exm_submit">
    </form>
@endsection
