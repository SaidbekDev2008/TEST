<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

   public function teacher(){
        return $this->belongsTo(Teacher::class);
   }
   public function user(){
        return $this->belongsTo(User::class);
   }
}
