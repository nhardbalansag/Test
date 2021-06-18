<?php

namespace App\model\student;

use Illuminate\Database\Eloquent\Model;
use App\model\student\Student;

class StudentQueryBuilder extends Model
{
    public static function create($request){

        $data = Student::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'middlename' => $request['middlename'],
            'course' => $request['course'],
            'year' => $request['year'],
            'section' => $request['section']
        ]);

        return $data;

    }

}
