<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\model\helpers\Helper;
use PhpParser\Node\Expr\FuncCall;
use App\model\student_subject\StudentSubjectQueryBuilder;

class CreateStudentSubject extends Component
{

    public $subjectCotent, $student_id;

    public function render()
    {
        $data['subjects'] = $this->renderData();

        return view('livewire.create-student-subject', $data);
    }

    public function createStudentSubject(){

        $dataArray = array(
            'student_id' => $this->student_id,
            'subject_id' => $this->subjectCotent
        );

        if(!empty($this->subjectCotent)){
            StudentSubjectQueryBuilder::create( $dataArray);
        }

        return redirect()->route('addsubjectstudent', ['student_id' => $this->student_id]);

    }

    public function renderData(){

        $table = 'subjects';

        $data = Helper::getTableData($table);

        return $data;
    }
}
