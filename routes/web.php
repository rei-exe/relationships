<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [ProfileController::class, 'showAllUsers'])->name('showAllUsers');
Route::get('/user/profile/{id}', [UserController::class, 'showProfile'])->name('showProfile');
Route::get('/user/courses/{id}', [UserController::class, 'showCourses'])->name('showCourses');
Route::get('/course/{id}', [CourseController::class, 'showCourseUsers'])->name('showCourseUsers');