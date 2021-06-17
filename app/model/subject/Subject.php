<?php

namespace App\model\subject;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'image',
        'title',
        'description',
        'status'
    ];
}
