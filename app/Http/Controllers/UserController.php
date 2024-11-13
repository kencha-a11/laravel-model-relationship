<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function indexa() // return all users with associated profile
    {   
        $users = User::whereHas('profile')->with('profile')->get();
        return view('users.user-profile', compact('users'));
    }

    public function indexb() // return all courses with associated specific user
    {
        $users = User::with('courses')->get()->filter(function($user) {
            return $user->courses->isNotEmpty();
        });
        return view('users.user-course', compact('users'));
    }
    public function show()
    {
        $user = User::find(3);
        $user->load('profile');

        return $user;
    }

}
