@extends('layouts.app')
@section('content')
    <form action='search_exam' method="post">
        @csrf
        <input type="text" id="exam_code" name="exam_code">

        <input type="submit" id="exm_submit" name="exm_submit">
    </form>
@endsection
