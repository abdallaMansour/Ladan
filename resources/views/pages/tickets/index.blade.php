@extends('dash_layouts.app')

@section('active_ticket', 'active')
@section('active_nav_ticket', 'active')
@section('mode', 'dark')
@section('layout_style', 'dark-mode layout-fixed layout-navbar-fixed layout-footer-fixed')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('tickets.tickets') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ __('tickets.home') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('tickets.tickets') }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title d-flex justify-content-between align-items-center w-100">{{ __('tickets.index.count_of_tickets') }} : {{ $tickets->count() }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body overflow-auto">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('tickets.index.status') }}</th>
                                            <th>{{ __('tickets.index.priority') }}</th>
                                            <th>{{ __('tickets.index.category') }}</th>
                                            @if (auth()->user()->type == 'user')
                                                <th>{{ __('tickets.index.message') }}</th>
                                                <th>{{ __('tickets.index.file') }}</th>
                                                <th>{{ __('tickets.index.date') }}</th>
                                            @else
                                                <th>{{ __('tickets.index.name') }}</th>
                                                <th>{{ __('tickets.index.email') }}</th>
                                                <th>{{ __('tickets.index.phone') }}</th>
                                                <th>{{ __('tickets.index.message') }}</th>
                                                <th>{{ __('tickets.index.file') }}</th>
                                                <th>{{ __('tickets.index.date') }}</th>
                                                <th>{{ __('tickets.index.control') }}</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets as $ticket)
                                            <tr>
                                                <td>{{ $ticket->id }}</td>
                                                <td>{{ __('tickets.index.status_' . $ticket->status) }}</td>
                                                <td>{{ __('tickets.index.priority_' . $ticket->priority) }}</td>
                                                <td>{{ $ticket->category?->name }}</td>
                                                @if (auth()->user()->type == 'user')
                                                    <td style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width:200px">{{ $ticket->message }}</td>
                                                    <td>
                                                        <div>
                                                            @if ($ticket->getFirstMediaUrl())
                                                                <a href="{{ $ticket->getFirstMediaUrl() }}" download>{{ __('tickets.index.download_file') }}</a>
                                                            @else
                                                                <a class="text-secondary">{{ __('tickets.index.no_file_uploaded') }}</a>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>{{ $ticket->created_at?->diffForHumans() ?: 'No date' }}</td>
                                                @else
                                                    <td>{{ $ticket->user->name }}</td>
                                                    <td>{{ $ticket->user->email }}</td>
                                                    <td>{{ $ticket->user->phone }}</td>
                                                    <td style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width:200px">{{ $ticket->message }}</td>
                                                    <td>
                                                        <div>
                                                            @if ($ticket->getFirstMediaUrl())
                                                                <a href="{{ $ticket->getFirstMediaUrl() }}" download>{{ __('tickets.index.download_file') }}</a>
                                                            @else
                                                                <a class="text-secondary">{{ __('tickets.index.no_file_uploaded') }}</a>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>{{ $ticket->created_at?->diffForHumans() ?: 'No date' }}</td>
                                                    <td>
                                                        <div class="d-flex flex-column w-100">
                                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#show-{{ $ticket->id }}">
                                                                {{ __('tickets.index.show') }}
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-success text-nowrap" data-toggle="modal" data-target="#change_status-{{ $ticket->id }}">
                                                                {{ __('tickets.index.change_status') }}
                                                            </button>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>








                                            @php
                                                $is_ar = App::currentLocale() === 'ar' ? true : false;
                                            @endphp
                                            <div class="modal fade" id="show-{{ $ticket->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header align-items-center {{ $is_ar ? 'd-flex flex-row-reverse' : '' }}">
                                                            <h4 class="modal-title">{{ $ticket->user->name }}</h4>
                                                            <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body {{ $is_ar ? 'd-flex flex-column align-items-end' : '' }}">
                                                            @if ($ticket->user->phone)
                                                                <p>{{ __('tickets.index.phone') }} : <span class="text-secondary">{{ $ticket->user->phone }}</span></p>
                                                            @endif
                                                            <p>{{ __('tickets.index.status') }} : <span class="text-secondary">{{ __('tickets.index.status_' . $ticket->status) }}</span></p>
                                                            <p>{{ __('tickets.index.priority') }} : <span class="text-secondary">{{ __('tickets.index.priority_' . $ticket->priority) }}</span></p>
                                                            <p>{{ __('tickets.index.category') }} : <span class="text-secondary">{{ $ticket->category?->name }}</span></p>
                                                            <p class="{{ $is_ar ? 'd-flex flex-row-reverse' : '' }}">{{ __('tickets.index.email') }} <span class="text-secondary">
                                                                    {{ $ticket->user->email }}</span></p>
                                                            <p style="margin-bottom: 5px">{{ __('tickets.index.message') }} :</p>
                                                            <span class="text-sm">{{ $ticket->message }}</span>
                                                            <p class="text-secondary text-sm mt-3">{{ __('tickets.index.date') }}: {{ $ticket->created_at?->diffForHumans() ?: 'No date' }}</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('tickets.index.close') }}</button>
                                                            @if ($ticket->getFirstMediaUrl())
                                                                <a href="{{ $ticket->getFirstMediaUrl() }}" class="btn btn-primary" download>{{ __('tickets.index.download_file') }}</a>
                                                            @else
                                                                <span class="text-secondary">{{ __('tickets.index.no_file_uploaded') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <div class="modal fade" id="change_status-{{ $ticket->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header align-items-center {{ $is_ar ? 'd-flex flex-row-reverse' : '' }}">
                                                            <h4 class="modal-title">{{ $ticket->user->name }}</h4>
                                                            <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('dashboard.tickets.change_status', $ticket->id) }}" method="POST" class="w-100">
                                                                @csrf
                                                                @method('PATCH')



                                                                <div class="form-group">
                                                                    <label for="exampleSelectBorder">{{ __('tickets.create.priority') }}</label>
                                                                    <select required class="custom-select form-control-border" name="status" id="exampleSelectBorder">
                                                                        <option value="open" @selected(old('priority') == 'open')>{{ __('tickets.create.status_open') }}</option>
                                                                        <option value="under_review" @selected(old('priority') == 'under_review')>{{ __('tickets.create.status_under_review') }}</option>
                                                                        <option value="resolved" @selected(old('priority') == 'resolved')>{{ __('tickets.create.status_resolved') }}</option>
                                                                        <option value="closed" @selected(old('priority') == 'closed')>{{ __('tickets.create.status_closed') }}</option>
                                                                    </select>
                                                                    @error('priority')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="d-flex justify-content-between">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('tickets.index.close') }}</button>
                                                                    <button class="btn btn-success">{{ __('tickets.index.change_status') }}</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('tickets.index.status') }}</th>
                                            <th>{{ __('tickets.index.priority') }}</th>
                                            <th>{{ __('tickets.index.category') }}</th>
                                            @if (auth()->user()->type == 'user')
                                                <th>{{ __('tickets.index.message') }}</th>
                                                <th>{{ __('tickets.index.file') }}</th>
                                                <th>{{ __('tickets.index.date') }}</th>
                                            @else
                                                <th>{{ __('tickets.index.name') }}</th>
                                                <th>{{ __('tickets.index.email') }}</th>
                                                <th>{{ __('tickets.index.phone') }}</th>
                                                <th>{{ __('tickets.index.message') }}</th>
                                                <th>{{ __('tickets.index.file') }}</th>
                                                <th>{{ __('tickets.index.date') }}</th>
                                                <th>{{ __('tickets.index.control') }}</th>
                                            @endif
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


@section('header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('footer')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('dashboard_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dashboard_assets/dist/js/adminlte.min.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
