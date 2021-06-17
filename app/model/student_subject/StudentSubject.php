<?php

namespace App\model\student_subject;

use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    protected $fillable = [
        'student_id',
        'subject_id'
    ];
}
