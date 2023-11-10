<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseFormPin extends Model
{
    protected $fillable = [
        'pin_num', 'is_used', 'created_admin_id',
        'date_created', 'time_created',
        'student_used_id', 'date_used', 'time_used'
    ];

    // Define relationships if necessary
    // public function createdAdmin()
    // {
    //     return $this->belongsTo(User::class, 'created_admin_id');
    // }

    // public function studentUsed()
    // {
    //     return $this->belongsTo(Student::class, 'student_used_id');
    // }
}
