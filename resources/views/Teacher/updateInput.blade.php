@extends('layouts.app')
@section('content')

    @foreach($getQuestion as $answer)
    <form action="please" method="post">
        @csrf
        <h1>{{$answer->question_id}}</h1>
        <input type="hidden" name="exam_id" value="{{$answer->question_id}}">
        <input type="text" name="question_title">
        <input type="text" name="option_A">
        <input type="text" name="option_B">
        <input type="text" name="option_C">
        <input type="text" name="option_D">
        <input type="text" name="correct_answer">
        <input type="submit" name="please"  >


    </form>
    @endforeach
@endsection
