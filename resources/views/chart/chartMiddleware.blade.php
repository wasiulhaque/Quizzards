@extends('layouts.app')
@section('content')
<div class = "logincontent">
<div class="container">
<div class="col-md-8">
    <div class="card">
    <div class="card-header">{{ __('Your Marks') }}</div>
    <div class="card-body">

    <form action="give_me_chart" method="post">
        @csrf

        <h1>
            {{$count}}
        </h1>
        <input type="hidden" name="quiz_id" value="{{$exam_id}}">
        <input type="submit" name="give_me_chart" value="See your performance sheet">

    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
