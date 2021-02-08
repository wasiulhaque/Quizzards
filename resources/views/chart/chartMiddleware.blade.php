@extends('layouts.app')
@section('content')
    <form action="give_me_chart" method="post">
        @csrf

        <h1>
            {{$count}}
        </h1>
        <input type="hidden" name="quiz_id" value="{{$exam_id}}">
        <input type="submit" name="give_me_chart" value="give_me_chart">

    </form>
@endsection
