@extends('layouts.app')
@section('content')
    @foreach($examNumber as $exam)
    <h1>
        {{$exam->exam_id}}
    </h1>
@endsection
