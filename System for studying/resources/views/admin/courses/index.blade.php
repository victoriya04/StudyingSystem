@extends('layouts.app')

@section('title', 'Admin | Courses')

@section('content')
    <h1>Courses List</h1>
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