
@extends('welcome')

@section('home-contents')

    <div>
        <div class="content-header">
            <div>
                <div>
                    <h1 class="text-capitalize">Subjects</h1>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid col-12 row">
                <div class="col-12 col-md-4">
                    @livewire('create-subject')
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
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                        Subject Image
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                        Subject Title
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($subjects as $key => $value)
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
                                                        Subject Title
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

