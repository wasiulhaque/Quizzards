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
    padding:8px 60px; 
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
    <div class="card" text-center>
    <div class="card-body">

    @foreach($getQuestion as $answer)
    <form action="please" method="post">
        @csrf
        <input type="hidden" name="exam_id" value="{{$answer->question_id}}">
        
        <div class="form-group row">
        <div class="col-md-6">
        <label for="question_name">Question Title</label>
        <input type="text" name="question_title">
        </div></div>
        <br>
        <div class="form-group row">
        <div class="col-md-6">
        <label for="option_A">Option A</label>
        <input type="text" name="option_A">
        </div></div>

        <div class="form-group row">
        <div class="col-md-6">
        <label for="option_B">Option B</label>
        <input type="text" name="option_B">
        </div></div>

        <div class="form-group row">
        <div class="col-md-6">
        <label for="option_C">Option C</label>
        <input type="text" name="option_C">
        </div></div>

        <div class="form-group row">
        <div class="col-md-6">
        <label for="option_D">Option D</label>
        <input type="text" name="option_D">
        </div></div>

        <div class="form-group row">
        <div class="col-md-6">
        <label for="correct_answer">Correct Answer</label>
        <input type="text" name="correct_answer">
        </div></div>

        <div class="form-group row">
        <div class="col-md-6">
        <input type="submit" name="please">


        </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    </form>
    @endforeach
@endsection
