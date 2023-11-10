<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App;

class CourseFormPin extends Model
{
    protected $fillable = [
        'pin_num', 'is_used', 'created_admin_id',
        'date_created', 'time_created',
        'student_used_id', 'date_used', 'time_used'
    ];

    public function createdAdmin(): BelongsTo
    {
        return $this->belongsTo(App\User::class, 'created_admin_id');
    }

    public function studentUsed(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_used_id');
    }
}
