<div class="collapse show" id="collapseExample" style="">
    <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title"> Create student</h3>
        </div>
        <div class="card-body">
            <form wire:submit="createStudent" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputBorderWidth2">First Name</label>
                    <input wire:model.defer ="firstname" name="firstname" type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputBorderWidth2">Last Name</label>
                    <input wire:model.defer="lastname" name="lastname" type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputBorderWidth2">Middle Name</label>
                    <input wire:model.defer="middlename" name="middlename" type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputBorderWidth2">Course</label>
                    <input wire:model.defer="course" name="course" type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
                </div>
                <div class="form-group ">
                    <label for="exampleSelectBorderWidth2">Year</label>
                    <select wire:model.defer="year" name="year" class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                        <option value="1st year">1st Year</option>
                        <option value="2nd year">2nd Year</option>
                        <option value="3rd year">3rd Year</option>
                        <option value="4th year">4th Year</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputBorderWidth2">Section</label>
                    <input wire:model.defer="section" name="section" type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputBorderWidth2">Number</label>
                    <input wire:model.defer="number" name="number" type="number" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputBorderWidth2">Email</label>
                    <input wire:model.defer="email" name="email" type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputBorderWidth2">Address</label>
                    <input wire:model.defer="address" name="address" type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    <div wire:loading>
        @include('content.cms.includes.loading-state');
    </div>
</div>
