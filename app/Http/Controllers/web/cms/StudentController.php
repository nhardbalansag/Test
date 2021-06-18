<?php

namespace App\Http\Controllers\web\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionContextPass;
use App\model\helpers\Helper;

class StudentController extends Controller
{
    public function index(){

        return view('content.cms.components.student-list');

    }

    public function editStudent(Request $request){

        $data['student_id'] = $request['student_id'];

        return view('content.cms.components.edit-student', $data);
    }

}
