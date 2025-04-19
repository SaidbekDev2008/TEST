<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SendStudentTestCode;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/student_messages', [PageController::class, 'student_messages'])->name('student.msg');
    Route::get('/teacher_messages', [PageController::class, 'teacher_messages'])->name('teacher.msg');
    Route::get('/profile', [PageController::class, 'profile'])->name('profile');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/sendTestCode/{Teacher}',[SendStudentTestCode::class, 'Send_Test_Cod'])->name('send');
});
Route::middleware('guest')->group(function () {
    Route::post('follow/{teacher}', [FollowController::class, 'follow'])->name('follow');
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/login', [PageController::class, 'login'])->name('login');
    Route::get('/register', [PageController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login.auth');
    Route::post('/register', [AuthController::class, 'register'])->name('register.auth');
});
