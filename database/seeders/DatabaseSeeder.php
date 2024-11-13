<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Profile;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()
        ->has(Profile::factory())
        ->create();

        $courses = Course::factory(3)->create();
        $user->courses()->attach($courses->pluck('id'));
    }
}
