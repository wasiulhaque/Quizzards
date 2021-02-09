@extends('layouts.app')
@section('content')
    <form action='show_result' method="post">
        @csrf
        <input type="text" id="exam_code" name="exam_code">

        <input type="submit" id="show_result" name="show_result">
    </form>
@endsection
