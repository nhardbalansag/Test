<?php

namespace App\model\student_subject;

use Illuminate\Database\Eloquent\Model;
use App\model\student_subject\StudentSubject;
use Illuminate\Support\Facades\DB;
class StudentSubjectQueryBuilder extends Model
{
    public static function create($request){

        $data = StudentSubject::create([
            'student_id' => $request['student_id'],
            'subject_id' => $request['subject_id']
        ]);

        return $data;

    }

    public static function getSubjects($studentid){

        $data = DB::table('student_subjects')
                ->join('students', 'students.id', '=', 'student_subjects.student_id')
                ->join('subjects', 'subjects.id', '=', 'student_subjects.subject_id')
                ->select('subjects.*')
                ->where('students.id', $studentid)
                ->get();

        return $data;
    }
}
