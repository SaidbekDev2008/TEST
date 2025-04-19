<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Saidbek',
            'email' => 'saidbek1411@gmail.com',
            'password' => bcrypt('secret123'),
        ])->roles()->attach([1]);
        User::create([
            'name' => 'Asadbek',
            'email' => 'asad@e.co',
            'password' => bcrypt('secret123'),
        ])->roles()->attach([2]);
        User::create([
            'name' => 'Asilbek',
            'email' => 'asilbek@g.ru',
            'password' => bcrypt('secret123'),
        ])->roles()->attach([2]);
        User::create([
            'name' => 'Shoxrux',
            'email' => 'shoxrux@gmail.com',
            'password' => bcrypt('secret123'),
        ])->roles()->attach([3]);
        User::create([
            'name' => 'Shoxsot',
            'email' => 'shoxsot@mail.com',
            'password' => bcrypt('secret123'),
        ])->roles()->attach([3]);
    }
}
