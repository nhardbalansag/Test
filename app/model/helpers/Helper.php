<?php

namespace App\model\helpers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Helper extends Model
{
    public static function getWhereTableData($table, $column, $data){

        $data = DB::table($table)
                ->where($column, $data)
                ->get();

        return $data;
    }

    public static function getTableData($table){

        $data = DB::table($table)
                ->get();

        return $data;
    }

    public static function firstTableData($table, $column, $data){

        $data = DB::table($table)
        ->first();

        return $data;
    }

    public static function firstWhereTableData($table, $column, $data){

        $data = DB::table($table)
        ->where($column, $data)
        ->first();

        return $data;
    }

    public static function deleteData($table, $column, $data){

        $data = DB::table($table)
                ->where($column, $data)
                ->delete();

        return $data;

    }

    public static function edit($model, $id, $data){

        $data = DB::table($model)
                ->where('id', $id)
                ->update($data);

        return $data;

    }

}
