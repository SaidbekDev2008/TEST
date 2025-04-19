<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Faqat "teacher" roliga ega bo'lgan userlardan id=2 ni olish
        // $teacherUser = User::whereHas('roles', function ($query) {
        //     $query->where('name', 'teacher');
        // })->find(2);
        $teacherUser = User::whereRelation('roles','name','teacher')->find(2);
        // Agar topilsa, Teacher modeliga yozamiz
        if ($teacherUser) {
            Teacher::create([
                'name' => $teacherUser->name,
            ]);
        }
    }
}
