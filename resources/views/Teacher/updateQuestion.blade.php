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

body {
    background-image: url("../images/quizzards-back.png");
}

</style>

    {{-- <form action="{{url('submitAnswer/'.$answer->question_id)}}" method="post">--}}


    <input type="hidden" name="exam_id" id="exam_id" value="{{$exam_id}}">
@foreach($answerScript as $answer)

    <div class = "logincontent">
            <div class="container">
        <div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Modify Question') }}</div>
        <div class="card-body">

            <form action='updateQuestion_action' method="post">
            @csrf

            <h1>
                {{$answer->question_title}}
            </h1>
            <input type="hidden" name="question_id" value="{{$answer->question_id}}">
            <input type="radio" id="A" name="option[{{$answer->question_id}}]" value="A">
            <label for="A">{{$answer->option_A}}</label>
            <br>
            <input type="radio" id="B" name="option[{{$answer->question_id}}]" value="B">
            <label for="B">{{$answer->option_B}}</label>
            <br>
            <input type="radio" id="C" name="option[{{$answer->question_id}}]" value="C">
            <label for="C">{{$answer->option_C}}</label>
            <br>
            <input type="radio" id="D" name="option[{{$answer->question_id}}]" value="D">
            <label for="D">{{$answer->option_D}}</label>
            <br>
            <input type="submit" id='updateQuestion_action'  name="updateQuestion_action" value="Edit">
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    @endforeach
@endsection

<!--
how to delete with confirmation with laravel--
