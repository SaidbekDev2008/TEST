<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function follow(Teacher $teacher) {
        $user = Auth::user();
        $existingFollow = $teacher->students()->where('user_id', $user->id)->first();
        if ($existingFollow) {
            $existingFollow->delete();
            return back();
        }
       $teacher->students()->create([
        'name'=>Auth::user()->name,
        'teacher_id'=>$teacher->id,
       ]);
       return back()->with('success', 'You are now following ' . $teacher->name);
    }
}
