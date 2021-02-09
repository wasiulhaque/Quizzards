@extends('layouts.app')
@section('content')

    <form action="teacher_add_question" method="post">
        @csrf
        <input type="hidden" name="teacher_id" value="{{$temp}}">
        <label for="addQuestion">
            <input type="submit" name="addQuestion">
        </label>

    </form>
    <form action="teacher_update_question" method="post">
        @csrf
        <input type="hidden" name="teacher_id" value="{{$temp}}">
        <label for="addQuestion">
            <input type="submit" name="teacher_update_question" value="Update">
        </label>

    </form>
@endsection



