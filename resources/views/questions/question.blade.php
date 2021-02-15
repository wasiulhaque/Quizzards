@extends('layouts.app')
@section('content')
    <html>
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
    <div class="card">
    <div class="card-header">{{ __('Add Question') }}</div>
    <div class="card-body">


    <form action="submit" method="post">



        @csrf
        <input type="hidden" id="exam_id" name="exam_id" value="{{$exam_code}}">
        <input type="hidden" id="teacher_id" name="teacher_id" value="{{$teacher_id}}">
        <label for="exam_id"></label>
        {{--@for($i=0;$i<20;$i++)--}}
            <div class="form-group row">
            <div class="col-md-6">
            <input type="text" id="question_name" name="question_name">
            <label for="question_name">Question</label>
            </div></div>

            <div class="form-group row">
            <div class="col-md-6">
            <input type="text" id="option_A" name="option_A">
            <label for="option_A">Option A</label>
            </div></div>

            <div class="form-group row">
            <div class="col-md-6">
            <input type="text" id="option_B" name="option_B">
            <label for="option_B">Option B</label>
            </div></div>

            <div class="form-group row">
            <div class="col-md-6">
            <input type="text" id="option_C" name="option_C">
            <label for="option_C">Option C</label>
            </div></div>

            <div class="form-group row">
            <div class="col-md-6">
            <input type="text" id="option_D" name="option_D">
            <label for="option_D">Option D</label>
            </div></div>

            <div class="form-group row">
            <div class="col-md-6">
            <input type="text" id="correctAnswer" name="correctAnswer">
            <label for="correctAnswer">Correct Answer</label>
            </div></div>
        {{--@endfor--}}
        <input type="submit" name="submit" id="submit">
        <label for="submit"></label>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </html>
@endsection
