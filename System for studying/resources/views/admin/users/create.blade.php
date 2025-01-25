@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<h1>Create New User</h1>
<form action="{{ url('/admin/users/') }}" method="POST">
    @csrf
    <label for="name">User Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <label for="role">Role:</label>
    <select name="role" id="role">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>

    <button type="submit">Create User</button>
</form>
@endsection
