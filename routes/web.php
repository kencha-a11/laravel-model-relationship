<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\testingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/',[testingController::class, 'create']);
// Route::get('/',[testingController::class, 'courses']);


// Route::get('/',[ProfileController::class, 'index']); // Profile Model to User Information

// Route::get('/',[UserController::class, 'indexa']); // User Model to Profile Information

// Route::get('/',[UserController::class, 'indexb']); // User List with Courses

Route::get('/', [CourseController::class, 'index']); // Courses and their Users
