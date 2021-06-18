<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\model\student\StudentQueryBuilder;
use App\model\contact_information\ContactInformationQueryBuilder;
use App\model\helpers\Helper;

class EditStudent extends Component
{

    public $student_id, $firstname, $lastname, $middlename, $course, $year, $section, $number, $email, $address;

    public $formdata = [
        'firstname'  => 'required',
        'lastname'  => 'required',
        'middlename'  => 'min:0',
        'course'  => 'required',
        'year'  => 'required',
        'section'  => 'required|numeric'
    ];

    public function render()
    {
        $data['student'] = $this->renderData();

        $table = 'students';
        $column = 'id';
        $dataContent = $this->student_id;

        $data['studentData'] = Helper::firstWhereTableData($table, $column, $dataContent);

        return view('livewire.edit-student', $data);
    }

    public function editStudent(){

        $table = 'students';
        $whereid = $this->student_id;
        $data = [
            'firstname'  => $this->firstname,
            'lastname'  => $this->lastname,
            'middlename'  => $this->middlename,
            'course'  => $this->course,
            'year'  => $this->year,
            'section'  => $this->section
        ];

        Helper::edit($table, $whereid, $data);
    }

    public function renderData(){

        $table = 'students';

        $data = Helper::getTableData($table);

        return $data;
    }
}
