@extends('layouts.app')

@section('title', 'Admin | Locations')

@section('content')
<h1>Locations List</h1>
<a href="{{ url('/admin/locations/create') }}">Create New Location</a>
<ul>
    @foreach ($locations as $location)
        <li>
            {{ $location->name }}
            <a href="{{ url('/admin/locations/' . $location->id . '/edit') }}">Edit</a>
            <form action="{{ url('/admin/locations/' . $location->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
