@extends('layouts.app')
@section('content')

    <form action="{{url('submitAnswer/'.$answer->question_id)}}" method="post">
    @foreach($answerScript as $answer)
            @csrf
            {
            <h1>
                {{$answer->question_title}} {{$answer->question_id}}
            </h1>

            <input type="radio" id="A" name="optionRad[{{$answer->question_id}}]" value="A">
            <label for="A">{{$answer->option_A}}</label>
            <br>
            <input type="radio" id="B" name="option" value="B">
            <label for="B">{{$answer->option_B}}</label>
            <br>
            <input type="radio" id="C" name="option" value="C">
            <label for="C">{{$answer->option_C}}</label>
            <br>
            <input type="radio" id="D" name="option" value="DGo">
            <label for="D">{{$answer->option_D}}</label>
            <br>
            @endforeach
            <input type="submit" id="submitAnswer" value="submitAnswer">
        </form>
@endsection

<!--
how to delete with confirmation with laravel--
