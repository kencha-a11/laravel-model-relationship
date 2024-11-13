<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class testingController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function create()
    {
        // CREATE USER
        $user = User::create([
            'name' => 'Santos',
            'email' => 'Santos@example.com',
            'password' => bcrypt('1234'),
        ]);

        // CREATE PROFILE
        $user->profile()->create(['bio' => 'student Santos']);

        // CREATE COURSE
        // $user = User::find(1);

        $course = new Course(['course' => 'BSIT']);
        $course->user_id = $user->id; 
        $course->save(); 

        // ATTACH PIVOT
        $user->courses()->attach($course->id);
        
        return [$user,$user->profile,$user->courses];
    }


    
    public function show()
    {
        $id = 2;
        // $courses = User::find($id)->profile(Profile::all())->update(['bio'=>'first update']);
        $user = User::find($id);
        $profile = User::find($id)->profile(Profile::find($id))->update(['bio'=>'jonathans updated bio']);

        $courses = User::find($id)->courses(Course::find($id))->update(['course'=>'ACT']);

        return "$user<hr>$user->profile<hr>$user->courses";
        // return User::find(1)->courses;
    }

    public function profiles()
    {
        return Profile::all();
    }
    public function courses()
    {
        return Course::all();
    }
}


