@extends('layouts.app')

@section('title', 'Admin | Dashboard')

@section('content')
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="{{ route('admin.courses.index') }}">Manage Courses</a></li>
        <li><a href="{{ route('admin.teachers.index') }}">Manage Teachers</a></li>
        <li><a href="{{ route('admin.locations.index') }}">Manage Locations</a></li>
        <li><a href="{{ route('admin.organizations.index') }}">Manage Organizations</a></li>
        <li><a href="{{ route('admin.users.index') }}">Manage Users</a></li>
    </ul>
@endsection