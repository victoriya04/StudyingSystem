@extends('layouts.app')

@section('title', 'Admin | Users')

@section('content')
<h1>Users List</h1>
<a href="{{ url('/admin/users/create') }}">Create New User</a>
<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }} - {{ $user->email }} - {{ $user->role }}
            <a href="{{ url('/admin/users/' . $user->id . '/edit') }}">Edit</a>
            <form action="{{ url('/admin/users/' . $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
