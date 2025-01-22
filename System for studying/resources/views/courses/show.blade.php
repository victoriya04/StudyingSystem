@extends('layouts.app')

@section('title', 'Course Details')

@section('content')
<h1>{{ $course->name }} - Details</h1>
    <p>Date: {{ $course->date }}</p>
    <p>Duration: {{ $course->duration }} hours</p>
    <p>Teacher ID: {{ $course->teacher_id }}</p>
    <p>Organization ID: {{ $course->organization_id }}</p>
    <p>Location ID: {{ $course->location_id }}</p>
    <a href="{{ route('courses.index') }}">Back to Courses</a>
@endsection