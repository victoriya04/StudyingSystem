@extends('layouts.app')

@section('title', 'Admin | Organizations')

@section('content')
<h1>Organizations List</h1>
<a href="{{ url('/admin/organizations/create') }}">Create New Organization</a>
<ul>
    @foreach ($organizations as $organization)
        <li>
            {{ $organization->name }}
            <a href="{{ url('/admin/organizations/' . $organization->id . '/edit') }}">Edit</a>
            <form action="{{ url('/admin/organizations/' . $organization->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
