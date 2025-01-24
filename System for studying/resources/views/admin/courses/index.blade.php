@extends('layouts.app')

@section('title', 'Admin | Courses')

@section('content')
    <h1>Courses List</h1>
    <a href="{{ url('/admin/courses/create') }}">Create New Course</a>
    <ul>
        @foreach ($courses as $course)
            <li>
                {{ $course->name }} - {{ $course->date }}
                <a href="{{ url('/admin/courses/' . $course->id . '/edit') }}">Edit</a>
                <form action="{{ url('/admin/courses/' . $course->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection