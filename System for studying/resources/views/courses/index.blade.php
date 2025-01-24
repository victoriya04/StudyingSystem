@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <h1>Courses List</h1>
    <ul>
        @foreach ($courses as $course)
            <li>
                {{ $course->name }} - {{ $course->date }}
            </li>
        @endforeach
    </ul>
@endsection
