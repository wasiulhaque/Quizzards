@extends('layouts.app')
@section('content')

    <form action="teacher_add_question" method="post">
        <label for="addQuestion">
            <input type="submit" name="addQuestion">
        </label>
        <input type="hidden" name="teacher_id" value="A">
        <h1>
            {{$temp}}
        </h1>
    </form>
@endsection
