<?php

namespace App\Http\Controllers\web\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\helpers\Helper;

class SubjectController extends Controller
{
    public function createSubject(){

        $data['subjects'] = Helper::getTableData('subjects');

        return view('content.cms.components.create-subject', $data);
    }
}
