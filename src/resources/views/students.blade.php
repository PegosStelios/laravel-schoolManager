@extends('layout')

@section('content')
<h1>Students</h1>

@unless (count($students) == 0)
    @foreach ($students as $student)
        <h2>
            <div class="studentList">
                <a href="/students/{{$student['id']}}">
                    Student ID: {{$student['id']}} <br>
                </a>
            </div>
        </h2>

    @endforeach
    @else <h2>No students found</h2>

@endunless
@endsection
