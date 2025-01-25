<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\Organization;
use App\Models\Location;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'duration' => 'required|integer',
            'teacher_name' => 'required|string|max:100',
            'organization_name' => 'required|string|max:200',
            'location_name' => 'required|string|max:100',
        ]);

        // Трябва да се направи иф проверка, дали всичко е намерено и съществува
        $teacher = Teacher::where('name', $request->input('teacher_name'))->first();
        $organization = Organization::where('name', $request->input('organization_name'))->first();
        $location = Location::where('name', $request->input('location_name'))->first();
        
        if (!$teacher) {
            return redirect()->back()->with('error', 'Teacher not found!');
        }

        if (!$organization) {
            return redirect()->back()->with('error', 'Organization not found!');
        }

        if (!$location) {
            return redirect()->back()->with('error', 'Location not found!');
        }

        $validated['teacher_id'] = $teacher->id;
        $validated['organization_id'] = $organization->id;
        $validated['location_id'] = $location->id;

        Course::create($validated);

        return redirect()->route('courses.index');
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'duration' => 'required|integer',
            'teacher_id' => 'required|exists:teachers,id',
            'organization_id' => 'required|exists:organizations,id',
            'location_id' => 'required|exists:locations,id',
        ]);

        $course = Course::findOrFail($id);
        $course->update($validated);
        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('courses.index');
    }
}
