<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\LocationController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('courses', CourseController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('organizations', OrganizationController::class);
Route::resource('locations', LocationController::class);
