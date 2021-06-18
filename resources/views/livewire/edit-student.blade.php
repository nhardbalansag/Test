<div>
    <form wire:submit.prevent="editStudent" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputBorderWidth2">First Name</label>
            <input value={{ $this->firstname = $studentData->firstname }} wire:model.defer ="firstname"  type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputBorderWidth2">Last Name</label>
            <input value={{ $this->lastname = $studentData->lastname }}  wire:model.defer="lastname" name="lastname" type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputBorderWidth2">Middle Name</label>
            <input value={{ $this->middlename = $studentData->middlename }}  wire:model.defer="middlename" name="middlename" type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputBorderWidth2">Course</label>
            <input value={{ $this->course = $studentData->course }}  wire:model.defer="course" name="course" type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
        </div>
        <div class="form-group ">
            <label for="exampleSelectBorderWidth2">Year</label>
            <select value={{ $this->year = $studentData->year }}  wire:model.defer="year" name="year" class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                <option value="1st year">1st Year</option>
                <option value="2nd year">2nd Year</option>
                <option value="3rd year">3rd Year</option>
                <option value="4th year">4th Year</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputBorderWidth2">Section</label>
            <input value={{ $this->section = $studentData->section }}  wire:model.defer="section" name="section" type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
        </div>
        <div>
            <input type="submit" class="btn btn-primary">
        </div>
    </form>

    <div wire:loading>
        @include('content.cms.includes.loading-state');
    </div>
</div>
