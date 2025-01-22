@extends('layouts.app')

@section('title', 'Courses Edit')

@section('content')
<h1>Edit Course</h1>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Course Name:</label>
        <input type="text" name="name" id="name" value="{{ $course->name }}" required>
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" value="{{ $course->date }}" required>
        <label for="duration">Duration:</label>
        <input type="number" name="duration" id="duration" value="{{ $course->duration }}" required>
        <label for="teacher_id">Teacher:</label>
        <input type="number" name="teacher_id" id="teacher_id" value="{{ $course->teacher_id }}" required>
        <label for="organization_id">Organization:</label>
        <input type="number" name="organization_id" id="organization_id" value="{{ $course->organization_id }}" required>
        <label for="location_id">Location:</label>
        <input type="number" name="location_id" id="location_id" value="{{ $course->location_id }}" required>
        <button type="submit">Update Course</button>
    </form>
@endsection