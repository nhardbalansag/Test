<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\model\subject\SubjectQueryBuilder;
use App\model\helpers\Helper;

class CreateSubject extends Component
{
    use WithFileUploads;

    public $image, $title, $description;

    public function render()
    {
        $data['subjects'] = $this->renderData();

        return view('livewire.create-subject', $data);
    }

    public function createSubject(){

        $thumbnail = $this->image->store('photos');

        $insert = array(
            'image' => $thumbnail,
            'title' => $this->title ? $this->title : '',
            'description' => $this->description ? $this->description : ''
        );

        SubjectQueryBuilder::create($insert);

    }

    public function renderData(){

        $table = 'subjects';

        $data = Helper::getTableData($table);

        return $data;
    }
}
