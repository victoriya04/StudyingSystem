@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <h1>Courses List</h1>
    <a href="{{ route('courses.create') }}">Create New Course</a>
    <ul>
        @foreach ($courses as $course)
            <li>
                {{ $course->name }} - {{ $course->date }}
            </li>
        @endforeach
    </ul>
@endsection
