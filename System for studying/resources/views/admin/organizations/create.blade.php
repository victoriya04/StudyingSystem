@extends('layouts.app')

@section('title', 'Create Organization')

@section('content')
<h1>Create New Organization</h1>
<form action="{{ url('/admin/organizations/') }}" method="POST">
    @csrf
    <label for="name">Organization Name:</label>
    <input type="text" name="name" id="name" required>
    <button type="submit">Create Organization</button>
</form>
@endsection
