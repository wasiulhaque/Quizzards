@extends('layouts.app')
@section('content')
    <style>
input[type=submit] {
    padding:10px 290px; 
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
    <div class="card-body">
    <h2 class="card-text">You have successfully completed the test</h2>

    <form action='show_result' method="post">
        @csrf
        <input type="hidden" id="exam_id" name="exam_id" value="{{$exam_id}}">
        <input type="hidden" id="name" name="name" value="{{$name}}">

        <input type="submit" id="show_result" name="show_result" value="Show Result">
    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
