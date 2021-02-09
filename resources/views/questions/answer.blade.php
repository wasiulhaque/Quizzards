@extends('layouts.app')
@section('content')

   {{-- <form action="{{url('submitAnswer/'.$answer->question_id)}}" method="post">--}}
   <form action='submitAnswer' method="post">

       <input type="hidden" name="name" id="name" value="{{$name}}">
       <input type="hidden" name="exam_id" id="exam_id" value="{{$exam_id}}">
      
    @foreach($answerScript as $answer)
           @csrf
               {{$ara[$answer->question_id]='option'}}
            <h1>
                {{$answer->question_title}} {{$answer->question_id}}
            </h1>

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
       @endforeach
               <input type="submit" id="submitAnswer" value="submitAnswer">
           </form>
@endsection

<!--
how to delete with confirmation with laravel--
