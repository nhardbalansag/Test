
@extends('welcome')

@section('home-contents')

    <div>
        <div class="content-header">
            <div>
                <div>
                    <h1 class="text-capitalize">Students</h1>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid col-12 row">
                <div class="col-12 col-md-4">
                    @livewire('create-student')
                </div>
                <div class="col-12 col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Student List</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                        Name
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                        Course
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                        Year
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                        Section
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($student as $key => $value)
                                                <tr role="row" class="{{ ($key % 2) === 0 ? 'even' : 'odd'}} ">
                                                    <td>
                                                        {{ $value->lastname . ", " .$value->lastname . " " . ($value->lastname ? $value->middlename : '') }}
                                                    </td>
                                                    <td>
                                                        {{ $value->course }}
                                                    </td>
                                                    <td>
                                                        {{ $value->year }}
                                                    </td>
                                                    <td>
                                                        {{ $value->section }}
                                                    </td>
                                                    <td>
                                                        <div class="col-12 col-md-12 row">
                                                            <div class="col-md-4">
                                                                <button class="btn btn-primary">add</button>
                                                            </div>
                                                            <div class="col-md-4">
                                                                @livewire('delete-student', ['student_id' => $value->id])
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="{{ route('editStudent', ['student_id' => $value->id]) }}" class="btn btn-info">edit</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                            @endforelse
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">
                                                        Name
                                                    </th>
                                                    <th rowspan="1" colspan="1">
                                                        Course
                                                    </th>
                                                    <th rowspan="1" colspan="1">
                                                        Year
                                                    </th>
                                                    <th rowspan="1" colspan="1">
                                                        Section
                                                    </th>
                                                    <th rowspan="1" colspan="1">
                                                        Action
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

