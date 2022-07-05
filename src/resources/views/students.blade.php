@extends('layout')

@section('content')
<h1>Students</h1>

@unless (count($students) == 0)
    @foreach ($students as $student)
        <h2>
            <a href="/students/{{$student['id']}}">
                First Name:{{$student['name']}} <br> Last Name:{{$student['lastName']}}
            </a>
        </h2>

    @endforeach
    @else <h2>No students found</h2>

@endunless
@endsection
