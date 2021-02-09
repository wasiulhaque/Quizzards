@extends('layouts.app')
@section('content')

    <form action="update_code" method="post">

        @csrf
        <input type="text" name="exam_code">

        <input type="submit" name="update_code">

    </form>


@endsection
