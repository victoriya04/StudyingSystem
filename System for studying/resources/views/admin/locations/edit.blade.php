@extends('layouts.app')

@section('title', 'Edit Location')

@section('content')
<h1>Edit Location</h1>
<form action="{{ url('/admin/locations/' . $location->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Location Name:</label>
    <input type="text" name="name" id="name" value="{{ $location->name }}" required>

    <button type="submit">Update Location</button>
</form>
@endsection
