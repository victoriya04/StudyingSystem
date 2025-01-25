@extends('layouts.app')

@section('title', 'Edit Teacher')

@section('content')
<h1>Edit Teacher</h1>
<form action="{{ url('/admin/teachers/' . $teacher->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Teacher Name:</label>
    <input type="text" name="name" id="name" value="{{ $teacher->name }}" required>

    <button type="submit">Update Teacher</button>
</form>
@endsection
