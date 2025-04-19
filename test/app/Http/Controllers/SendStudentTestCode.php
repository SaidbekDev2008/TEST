<?php

namespace App\Http\Controllers;

use App\Mail\SendStudentTestCode as MailSendStudentTestCode;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendStudentTestCode extends Controller
{
    public function Send_Test_Code(Teacher $teacher){
        $students = $teacher->students??null;
        if(!$students){
            return back()->with('error', 'No students found for this teacher.');
        }

        $code = rand(1000,5000);
        $students->each(function($data) use($code,$teacher){
            Mail::to($data->user->email)->send(new MailSendStudentTestCode($code, $teacher->name));
        });

    }
}
