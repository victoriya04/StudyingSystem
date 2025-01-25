@extends('layouts.app')

@section('title', 'Admin | Teachers')

@section('content')
<h1>Teachers List</h1>
<a href="{{ url('/admin/teachers/create') }}">Create New Teacher</a>
<ul>
    @foreach ($teachers as $teacher)
        <li>
            {{ $teacher->name }}
            <a href="{{ url('/admin/teachers/' . $teacher->id . '/edit') }}">Edit</a>
            <form action="{{ url('/admin/teachers/' . $teacher->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
