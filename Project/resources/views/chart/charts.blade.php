@extends('layouts.chart')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <div class="container">
    <h1>Show answer</h1>
        {!! $chart->container() !!}
        {!! $chart->script() !!}

    </div>
@endsection
