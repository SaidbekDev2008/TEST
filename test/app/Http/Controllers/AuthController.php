<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreRequest;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($validated)) {
            try {
                $request->session()->regenerate();
                logger()->info('Session regenerated', session()->all());
                return redirect()->intended(route('home'))->with('success', 'Login successful');
            } catch (\Exception $e) {
                logger()->error('Session error: ' . $e->getMessage());
                return back()->with('error', 'Session error occurred');
            }
        }

        return back()->withErrors([
            'email' => 'Login ma’lumotlari noto‘g‘ri.',
        ]);
    }
    public function register(StoreRequest $request){
       $user = User::create($request->except('role'));
       if($request->role == 'student'){
        Student::create([
            'name' => $user->name,
            'bio' => 'This is a bio for ' . $user->name,
        ]);
       }else if($request->role == 'teacher'){
        Teacher::create([
            'name' => $user->name,
            'bio' => 'This is a bio for ' . $user->name,
        ]);
       }
       Auth::login($user);
        return redirect()->route('login');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate(); // Sessionni yo'q qilish
        $request->session()->regenerateToken();
        return redirect()->route('home'); // Bosh sahifaga qaytish
    }

}
