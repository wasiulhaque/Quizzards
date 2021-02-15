@extends('layouts.app')
@section('content')
    <form action='search_exam_teacher' method="post">
        @csrf

        <input type="text" name="quiz_id">


        <input type="submit"  name="search_exam_teacher">
    </form>
@endsection
