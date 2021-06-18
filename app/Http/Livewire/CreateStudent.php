<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\model\student\StudentQueryBuilder;
use App\model\contact_information\ContactInformationQueryBuilder;
use App\model\helpers\Helper;

class CreateStudent extends Component
{

    public $firstname, $lastname, $middlename, $course, $year, $section, $number, $email, $address;

    public $formdata = [
        'firstname'  => 'required',
        'lastname'  => 'required',
        'middlename'  => 'min:0',
        'course'  => 'required',
        'year'  => 'required',
        'section'  => 'required|numeric',
        'number'  => 'required|numeric',
        'email'  => 'required|email',
        'address'  => 'required'
    ];

    public function render()
    {
        $data['student'] = $this->renderData();

        return view('livewire.create-student', $data);
    }

    public function createStudent(){

        $validatedData = $this->validate($this->formdata);

        $student = StudentQueryBuilder::create($validatedData);

        $info = ContactInformationQueryBuilder::create($validatedData, $student->id);

    }

    public function renderData(){

        $table = 'students';

        $data = Helper::getTableData($table);

        return $data;
    }
}
