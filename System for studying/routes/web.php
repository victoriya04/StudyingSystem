<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('courses', CourseController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('organizations', OrganizationController::class);
Route::resource('locations', LocationController::class);

// Show the registration form
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');

// Handle the registration logic
Route::post('register', [AuthController::class, 'register']);

// Show the login form
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Handle the login logic
Route::post('login', [AuthController::class, 'login']);

// Handle the logout logic
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function() {
    // Admin Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // Manage Courses
    Route::get('courses', [AdminController::class, 'manageCourses'])->name('admin.courses.index');
    Route::get('courses/create', [AdminController::class, 'createCourse'])->name('admin.courses.create');
    Route::post('courses', [AdminController::class, 'storeCourse'])->name('admin.courses.store');
    Route::get('courses/{course}/edit', [AdminController::class, 'editCourse'])->name('admin.courses.edit');
    Route::put('courses/{course}', [AdminController::class, 'updateCourse'])->name('admin.courses.update');
    Route::delete('courses/{course}', [AdminController::class, 'deleteCourse'])->name('admin.courses.delete');

    // Manage Teachers
    Route::get('teachers', [AdminController::class, 'manageTeachers'])->name('admin.teachers.index');
    Route::get('teachers/create', [AdminController::class, 'createTeacher'])->name('admin.teachers.create');
    Route::post('teachers', [AdminController::class, 'storeTeacher'])->name('admin.teachers.store');
    Route::get('teachers/{teacher}/edit', [AdminController::class, 'editTeacher'])->name('admin.teachers.edit');
    Route::put('teachers/{teacher}', [AdminController::class, 'updateTeacher'])->name('admin.teachers.update');
    Route::delete('teachers/{teacher}', [AdminController::class, 'deleteTeacher'])->name('admin.teachers.delete');

    // Manage Locations
    Route::get('locations', [AdminController::class, 'manageLocations'])->name('admin.locations.index');
    Route::get('locations/create', [AdminController::class, 'createLocation'])->name('admin.locations.create');
    Route::post('locations', [AdminController::class, 'storeLocation'])->name('admin.locations.store');
    Route::get('locations/{location}/edit', [AdminController::class, 'editLocation'])->name('admin.locations.edit');
    Route::put('locations/{location}', [AdminController::class, 'updateLocation'])->name('admin.locations.update');
    Route::delete('locations/{location}', [AdminController::class, 'deleteLocation'])->name('admin.locations.delete');

    // Manage Organizations
    Route::get('organizations', [AdminController::class, 'manageOrganizations'])->name('admin.organizations.index');
    Route::get('organizations/create', [AdminController::class, 'createOrganization'])->name('admin.organizations.create');
    Route::post('organizations', [AdminController::class, 'storeOrganization'])->name('admin.organizations.store');
    Route::get('organizations/{organization}/edit', [AdminController::class, 'editOrganization'])->name('admin.organizations.edit');
    Route::put('organizations/{organization}', [AdminController::class, 'updateOrganization'])->name('admin.organizations.update');
    Route::delete('organizations/{organization}', [AdminController::class, 'deleteOrganization'])->name('admin.organizations.delete');

    // Manage Users
    Route::get('users', [AdminController::class, 'manageUsers'])->name('admin.users.index');
    Route::get('users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('users', [AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::get('users/{user}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('users/{user}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('users/{user}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
});
