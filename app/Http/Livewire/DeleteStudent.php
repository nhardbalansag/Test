<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\model\helpers\Helper;

class DeleteStudent extends Component
{

    public $student_id;

    public function render()
    {
        return view('livewire.delete-student');
    }

    public function delete(){

        $table = "students";
        $column = "id";
        $columnData = $this->student_id;

        $data = Helper::deleteData( $table,  $column,  $columnData);

        return redirect('/');
    }
}
