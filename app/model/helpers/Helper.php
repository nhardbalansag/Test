<?php

namespace App\model\helpers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Helper extends Model
{
    public static function getTableData($table, $column, $data){

        $data = DB::table($table)
                ->where($column, $data)
                ->get();

        return $data;
    }

    public static function firstTableData($table, $column, $data){

        $data = DB::table($table)
        ->where($column, $data)
        ->get();

        return $data;
    }

}
