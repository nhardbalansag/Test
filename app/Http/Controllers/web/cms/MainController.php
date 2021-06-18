<?php

namespace App\Http\Controllers\web\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\helpers\Helper;

class MainController extends Controller
{
    public function index(){

        $table = 'students';

        $data['student'] = Helper::getTableData($table);

        return view('content.cms.components.student-list', $data);
    }
}
