<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Location;
use App\Models\Organization;
use App\Models\Teacher;
use App\Models\User;

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

    public function manageTeachers()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    public function createTeacher()
    {
        return view('admin.teachers.create');
    }

    public function storeTeacher(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Teacher::create($request->all());
        return redirect()->route('admin.teachers.index');
    }

    public function editTeacher(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function updateTeacher(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $teacher->update($request->all());
        return redirect()->intended('admin.teachers.index');
    }

    public function deleteTeacher(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('admin.teachers.index');
    }

    // Manage Locations ---------------------------------------------------------------------------------------------

    public function manageLocations()
    {
        $locations = Location::all();
        return view('admin.locations.index', compact('locations'));
    }

    public function createLocation()
    {
        return view('admin.locations.create');
    }

    public function storeLocation(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Location::create($request->all());
        return redirect()->route('admin.locations.index');
    }

    public function editLocation(Location $location)
    {
        return view('admin.locations.edit', compact('location'));
    }

    public function updateLocation(Request $request, Location $location)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $location->update($request->all());
        return redirect()->route('admin.locations.index');
    }

    public function deleteLocation(Location $location)
    {
        $location->delete();
        return redirect()->route('admin.locations.index');
    }


    // Manage Organizations -----------------------------------------------------------------------------------------

    public function manageOrganizations()
    {
        $organizations = Organization::all();
        return view('admin.organizations.index', compact('organizations'));
    }

    public function createOrganization()
    {
        return view('admin.organizations.create');
    }

    public function storeOrganization(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Organization::create($request->all());
        return redirect()->route('admin.organizations.index');
    }

    public function editOrganization(Organization $organization)
    {
        return view('admin.organizations.edit', compact('organization'));
    }

    public function updateOrganization(Request $request, Organization $organization)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $organization->update($request->all());
        return redirect()->route('admin.organizations.index');
    }

    public function deleteOrganization(Organization $organization)
    {
        $organization->delete();
        return redirect()->route('admin.organizations.index');
    }

    // Manage Users -------------------------------------------------------------------------------------------------

    public function manageUsers()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        User::create($request->all());
        return redirect()->route('admin.users.index');
    }

    public function editUser(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $user->update($request->all());
        return redirect()->route('admin.users.index');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
