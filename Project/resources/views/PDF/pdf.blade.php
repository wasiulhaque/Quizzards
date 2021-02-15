<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
<h1>Solution </h1>
<table style="width:100%">
    <tr>
        <th>Question Title</th>
        <th>Option A</th>
        <th>Option B</th>
        <th>Option C</th>
        <th>Option D</th>

        <th>Student Answer</th>
        <th>Correct Answer</th>
    </tr>
    @foreach($data as $title)
        <tr>
            <td> {{ $title->question_title }}</td>
            <td>{{$title->option_A}}</td>
            <td>{{$title->option_B}}</td>
            <td>{{$title->option_C}}</td>
            <td>{{$title->option_D}}</td>
            <td>

                {{ $title->student_answer }}
            </td>


            <td>

                {{ $title->correct_answer }}
            </td>
        </tr>
    @endforeach


</table>

</body>
</html>
