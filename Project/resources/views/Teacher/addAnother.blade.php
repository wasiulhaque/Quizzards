@extends('layouts.app')
@section('content')
    <style>
        input[type=submit] {
            padding:10px 35px;
            background:#ccc;
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
        input[type=text] {
            padding:8px 60px;
            border:2px solid #ccc;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }

        input[type=text]:focus {
            border-color:#333;
        }

        .card {
            margin: 0 auto; /* Added */
            float: none; /* Added */
            margin-bottom: 10px; /* Added */
        }

    </style>



    <div class = "logincontent">
        <div class="container">
            <div class="col-md-8">
                <div class="card text-center" align-items-center>
                    <div class="card-body">
                        <h2>Proceed</h2>
                        <form action="add_another_question" method="post">
                            @csrf
                            <input type="hidden" name="teacher_id" value="{{$teacher}}">
                            <input type="hidden" name="exam_id" value="{{$exam}}">
                            <label for="add_another_question">
                                <input type="submit" name="add_another_question" value="Add Another">

                            </label>



                        </form>
                        <form action="finish" method="post">
                            @csrf
                            <input type="hidden" name="teacher_id" value="{{$teacher}}">
                            <input type="hidden" name="exam_id" value="{{$exam}}">
                            <label for="finish">
                                <input type="submit" name="finish" value="Finished">
                            </label>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



