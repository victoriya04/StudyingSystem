@extends('layouts.app')

@section('title', 'Create Teacher')

@section('content')
<h1>Create New Teacher</h1>
<form action="{{ url('/admin/teachers/') }}" method="POST">
    @csrf
    <label for="name">Teacher Name:</label>
    <input type="text" name="name" id="name" required>
    <button type="submit">Create Teacher</button>
</form>
@endsection
