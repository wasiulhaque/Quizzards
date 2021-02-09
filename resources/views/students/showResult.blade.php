@extends('layouts.app')
@section('content')
    <form action='show_result' method="post">
        @csrf
        <input type="hidden" id="exam_id" name="exam_id" value="{{$exam_id}}">
        <input type="hidden" id="name" name="name" value="{{$name}}">
        <h1>
            {{$exam_id}}
        </h1>
        <h2>{{$name}}</h2>

        <input type="submit" id="show_result" name="show_result">
    </form>
@endsection
