@extends('layouts.app')
@section('content')
    <form action='add_exam' method="post">
        @csrf
        <h1>Add exam Number</h1>
        <input type="text" id="examNumber" name="examNumber" >
        <br>
        <input type="submit" id="add_exam" name="add_exam">
    </form>

@endsection

