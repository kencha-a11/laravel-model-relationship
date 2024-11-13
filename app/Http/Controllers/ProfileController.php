<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profiler;

class ProfileController extends Controller
{
    public function index() // return profile with associated user
    {
        $profiles = Profile::whereHas('user')->with('user')->get();
        return view('profiles.profile-user', compact('profiles')) ;
    }


    public function profileWithUsers() // profiles with user
    {
        $profiles = Profile::with(['user' => function($query) {
            $query->where('name', 'Jonathan');
        }])->get();

        return $profiles;
    }

}
