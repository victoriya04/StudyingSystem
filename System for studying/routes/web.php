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

    // Manage Locations
    Route::get('locations', [AdminController::class, 'manageLocations'])->name('admin.locations.index');

    // Manage Organizations
    Route::get('organizations', [AdminController::class, 'manageOrganizations'])->name('admin.organizations.index');

    // Manage Users
    Route::get('users', [AdminController::class, 'manageUsers'])->name('admin.users.index');
    Route::get('users/create', [AdminController::class, 'createAdminUser'])->name('admin.users.create');
});
