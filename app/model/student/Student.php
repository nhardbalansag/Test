<?php

namespace App\model\student;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'course',
        'year',
        'section'
    ];


    public function contactInformation(){

        return $this->hasOne('App\model\contact_information\ContactInformation');

    }
}
