<?php

namespace App\Http\Controllers\web\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\helpers\Helper;
use App\model\student_subject\StudentSubjectQueryBuilder;

class StudentSubjectController extends Controller
{
    public function addsubjectstudent(Request $request){

        $table = 'students';
        $column = 'id';
        $dataContent = $request['student_id'];

        $data['studentinfo'] = Helper::firstWhereTableData($table, $column, $dataContent);

        $table = 'contact_information';
        $column = 'student_id';
        $dataContent = $request['student_id'];

        $data['contact_information'] = Helper::firstWhereTableData($table, $column, $dataContent);

        $dataContent = $request['student_id'];

        $data['student_subjects'] = StudentSubjectQueryBuilder::getSubjects($dataContent);

        return view('content.cms.components.add-subject-to-student', $data);
    }
}
