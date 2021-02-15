@extends('layouts.app')
@section('content')

    <form >
         <h1>{{$idNumber}}</h1>
        <input type="text" id="please" name="please" value="{{$idNumber}}">
        <input type="submit" id="add_exam" name="add_exam" value="submit">
    </form>


@endsection
