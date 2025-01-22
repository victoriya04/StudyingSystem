@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<h1>Courses List</h1>
    <a href="{{ route('courses.create') }}">Create New Course</a>
    <ul>
        @foreach ($courses as $course)
            <li>
                {{ $course->name }} - {{ $course->date }}
                <a href="{{ route('courses.edit', $course->id) }}">Edit</a>
                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
