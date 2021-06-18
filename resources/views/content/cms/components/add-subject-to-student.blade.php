
@extends('welcome')

@section('home-contents')

<div>
    <div class="p-1 card card-default">
        <div class="card-header">
            <h3 class="card-title">Add Subjects to ({{ $studentinfo->lastname . ', ' . $studentinfo->firstname . ' ' . ($studentinfo->middlename ? $studentinfo->middlename : '') }})</h3>
        </div>
        <div class="p-2 card card-default">
            <div class="card-header">
                <div class="d-flex flex-column">
                    <div>
                        <p class="card-title">{{ $studentinfo->course . ' ' . $studentinfo->year . '-' . $studentinfo->section }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="card-header">
                            <div class="col-12 col-md-12">
                                <div class="row col-12 col-md-8">
                                    <div class="col-12 col-md-3">
                                        <span class="font-weight-bold">Cotact number</span>
                                        <p class="font-weight-light">{{ $contact_information->number }}</p>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <span class="font-weight-bold">Student Name</span>
                                        <p class="font-weight-light text-capitalize">{{ $studentinfo->course . ' ' . $studentinfo->year . '-' . $studentinfo->section }}</p>
                                    </div>
                                </div>
                                <div class="row col-12 col-md-8">
                                    <div class="col-12 col-md-4">
                                        <span class="font-weight-bold">Email</span>
                                        <p class="font-weight-light">{{ $contact_information->email }}</p>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <span class="font-weight-bold">Address</span>
                                        <p class="font-weight-light">{{ $contact_information->address }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12 col-md-12">
                        <div class="col-12 col-md-4">
                            @livewire('create-student-subject', ['student_id' => $studentinfo->id])
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Subject List</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-12">
                                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                                Subject Image
                                                            </th>
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                                Subject Tittle
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($student_subjects as $key => $value)
                                                        <tr role="row" class="{{ ($key % 2) === 0 ? 'even' : 'odd'}} ">
                                                            <td>
                                                                <img width="100" src="{{ asset('storage/' . $value->image) }} " alt="thumbnail">
                                                            </td>
                                                            <td>
                                                                {{ $value->title }}
                                                            </td>
                                                        </tr>
                                                    @empty
                                                    @endforelse
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th rowspan="1" colspan="1">
                                                                Subject Image
                                                            </th>
                                                            <th rowspan="1" colspan="1">
                                                                Subject Tittle
                                                            </th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('custom-scripts')
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "info": true, "ordering": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush
