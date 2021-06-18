@extends('welcome')

@section('home-contents')
<div class="collapse show" id="collapseExample" style="">
    <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title"> Edit student</h3>
        </div>
        <div class="card-body">
            @livewire('edit-student', ['student_id' => $student_id])
        </div>
    </div>
</div>
@endsection


