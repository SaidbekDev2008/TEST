<?php

namespace Database\Seeders;

use App\Models\Student;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::all()->each(function ($user) {
            if ($user->roles->contains('name', 'student')) {
                Student::create([
                    'user_id' => $user->id,
                    'name' => $user->name,
                    'bio' => 'This is a bio for ' . $user->name,
                    'teacher_id' => 1,
                ]);
            }
        });
    }
}
