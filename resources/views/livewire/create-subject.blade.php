<div class="collapse show" id="collapseExample" style="">
    <div class="card card-primary ">
        <div class="card-header">
            <h3 class="card-title"> Create subject</h3>
        </div>
        <div class="card-body">
            <form wire:submit="createSubject" enctype="multipart/form-data">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Image</label>
                    <label class="w-full py-2 font-semibold text-gray-800 bg-white border-black rounded shadow-xs cursor-pointer border-bottom hover:bg-gray-100">
                        <input type="file"
                            wire:model="image"
                        hidden>
                        <div>
                            <div class="row col-12 d-flex justify-content-center align-items-center"  style="color:#1b3295">
                                @if ($image)
                                    <div class="col-12">
                                        <img class="w-75" src="{{ $image->temporaryUrl() }}">
                                    </div>
                                    <div class="p-0 text-left col-12 ">
                                        <div class="p-0 col-12">
                                            <span class="p-0 text-xs text-capitalize" >select documents from gallery</span>
                                        </div>
                                    </div>
                                @else
                                    <div class="p-0 d-flex justify-content-end col-2">
                                        <svg height="59" width="50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-0 text-left col-10 ">
                                        <div class="p-0 col-12">
                                            <span class="p-0 text-xs text-capitalize" >select documents from gallery</span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputBorderWidth2">Subject Title</label>
                    <input wire:model.defer ="title" name="title" type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputBorderWidth2">Subject Description</label>
                    <input wire:model.defer ="description" name="description" type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder="">
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
