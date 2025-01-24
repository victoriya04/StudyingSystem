<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    // Manage Courses ---------------------------------------------------------------------------------------------
    public function manageCourses()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    public function createCourse()
    {
        return view('admin.courses.create');
    }

    public function storeCourse(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // Add validation rules for other fields
        ]);

        Course::create($request->all());
        return redirect()->route('admin.courses.index');
    }

    public function editCourse(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    public function updateCourse(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            // Add validation rules for other fields
        ]);

        $course->update($request->all());
        return redirect()->route('admin.courses.index');
    }

    public function deleteCourse(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index');
    }

    // Manage Teachers ---------------------------------------------------------------------------------------------

    // Similar methods for managing Teachers, Locations, Organizations, and Users
    public function manageTeachers()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    // Manage Locations ---------------------------------------------------------------------------------------------

    // Manage Organizations -----------------------------------------------------------------------------------------

    // Manage Users -------------------------------------------------------------------------------------------------

    public function manageUsers()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function createAdminUser()
    {
        return view('admin.users.create');
    }
}
