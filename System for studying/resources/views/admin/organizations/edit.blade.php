@extends('layouts.app')

@section('title', 'Edit Organization')

@section('content')
<h1>Edit Organization</h1>
<form action="{{ url('/admin/organizations/' . $organization->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Organization Name:</label>
    <input type="text" name="name" id="name" value="{{ $organization->name }}" required>

    <button type="submit">Update Organization</button>
</form>
@endsection
