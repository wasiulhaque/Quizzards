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
    background-image: url("../images/quizzards-back.png");
}
</style>


{{-- <form action="{{url('submitAnswer/'.$answer->question_id)}}" method="post">--}}
   <form action='submitAnswer' method="post" id="formbanaisi">

       <script>
           function startTimer(duration, display) {
               var timer = duration, seconds;
               setInterval(function () {

                   seconds = parseInt(timer % 60, 10);


                   seconds = seconds < 10 ? "0" + seconds : seconds;

                   display.textContent = seconds;

                   if (--timer <= 0) {
                       $("#formbanaisi").submit();

                   }
               }, 1000);
           }

           window.onload = function () {
               var secs = 10,
                   display = document.querySelector('#time');
               if(secs!=0){
                   startTimer(secs, display);}
           };
       </script>
       <body>
       <div>Quiz ends in <span id="time">10</span> secs</div>
       </body>
    
       <input type="hidden" name="name" id="name" value="{{$name}}">
       <input type="hidden" name="exam_id" id="exam_id" value="{{$exam_id}}">

       <div class = "logincontent">
<div class="container">
<div class="col-md-8">
    <div class="card">
    <div class="card-body">


    @foreach($answerScript as $answer)
           @csrf
  
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
