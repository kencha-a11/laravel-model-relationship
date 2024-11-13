<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // public function index()
    // {
    //     return Course::whereHas('user')->with('user')->get();
    // }

    public function index()
    {
        // Retrieve all courses with their associated users
        $courses = Course::with('user')->get()->groupBy('course');

        // Return the courses with their associated users
        return view('course.course-user', compact('courses'));
    }
}
