@extends('layouts.app')
@section('content')
    @foreach($count as $c)
    <h1>{{$c}}</h1>
    @endforeach
@endsection
