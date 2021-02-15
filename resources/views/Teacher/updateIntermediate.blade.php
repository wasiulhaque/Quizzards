@extends('layouts.app')
@section('content')

<style>
input[type=submit] {
    padding:10px 150px;
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
    <div class="card text-center" >
    <div class="card-header">{{ __('Update Question') }}</div>
    <div class="card-body">

    <form action="update_code" method="post">

        @csrf
        <div class="form-group row">
        <label for="exam_code">Enter the Exam Code</label>
        <div class="col-md-6">
        <input type="text" name="exam_code">
        </div></div>

        <input type="hidden" name="teacher_id" value="{{$idNumber}}">

        <input type="submit" name="update_code">

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
