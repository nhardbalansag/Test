<?php

namespace App\model\subject;

use Illuminate\Database\Eloquent\Model;
use App\model\subject\Subject;

class SubjectQueryBuilder extends Model
{
    public static function create($request){

        $data = Subject::create([
            'image' => $request['image'],
            'title' => $request['title'],
            'description' => $request['description']
        ]);

        return $data;

    }
}
