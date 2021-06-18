<?php

namespace App\model\contact_information;

use Illuminate\Database\Eloquent\Model;
use App\model\contact_information\ContactInformation;

class ContactInformationQueryBuilder extends Model
{
    public static function create($request, $id){

        $data = ContactInformation::create([
            'number' => $request['number'],
            'email' => $request['email'],
            'address' => $request['address'],
            'student_id' => $id
        ]);

        return $data;

    }
}
