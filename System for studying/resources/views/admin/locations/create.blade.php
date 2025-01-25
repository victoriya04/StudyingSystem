@extends('layouts.app')

@section('title', 'Create Location')

@section('content')
<h1>Create New Location</h1>
<form action="{{ url('/admin/locations/') }}" method="POST">
    @csrf
    <label for="name">Location Name:</label>
    <input type="text" name="name" id="name" required>
    <button type="submit">Create Location</button>
</form>
@endsection
