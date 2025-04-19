<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function register(){return view('auth.register');}
    public function login() {return view('auth.login');}
    public function student_message(){return view('student_messages');}
    public function teacher_message(){return view('teacher_messages');}
    public function home(){return view('home');}
    public function profile(){return view('profile');}
}
