<?php

namespace App\model\contact_information;

use Illuminate\Database\Eloquent\Model;
class ContactInformation extends Model
{
    protected $fillable = [
        'number',
        'email',
        'address',
        'student_id'
    ];

    public function student(){

        return $this->belongsTo('App\model\student\Student');

    }
}
