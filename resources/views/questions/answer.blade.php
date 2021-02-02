@extends('layouts.app')
@section('content')
    <form action="submit" method="post">
        @csrf
        @foreach($answerScript as $answer)
            <h1>
                {{$answer->question_title}}
            </h1>
            <input type="radio" id="A" name="option" value="A">
            <label for="A">{{$answer->option_A}}</label>
            <br>
            <input type="radio" id="B" name="option" value="B">
            <label for="B">{{$answer->option_B}}</label>
            <br>
            <input type="radio" id="C" name="option" value="C">
            <label for="C">{{$answer->option_C}}</label>
            <br>
            <input type="radio" id="D" name="option" value="D">
            <label for="D">{{$answer->option_D}}</label>
            <br>

        @endforeach

    </form>

@endsection
