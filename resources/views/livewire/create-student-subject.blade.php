<div class="collapse show" id="collapseExample" style="">
    <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title"> Create Student Subject</h3>
        </div>
        <div class="card-body">
            <form wire:submit="createStudentSubject" enctype="multipart/form-data">
                <div>
                    <div class="form-group ">
                        <label for="exampleSelectBorderWidth2">Subjects</label>
                        <select wire:model.prevent='subjectCotent' name="subjectCotent" class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                            <option value="{{ null }}">Select Subject</option>
                            @forelse ($subjects as $data => $value)
                                <option value="{{ $value->id }}">{{ $value->title }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    <div wire:loading>
        @include('content.cms.includes.loading-state');
    </div>
</div>
