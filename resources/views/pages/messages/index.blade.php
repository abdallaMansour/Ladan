@extends('dash_layouts.app')

@section('active_messages', 'active')
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
                        <h1>Admins</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admins</li>
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
                                <h3 class="card-title d-flex justify-content-between align-items-center w-100">Admin table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>Phone</th>
                                            <th>message</th>
                                            <th>Date</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                            <tr>
                                                <td>{{ $message->id }}</td>
                                                <td>{{ $message->name }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->phone }}</td>
                                                <td style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width:100px">{{ $message->message }}</td>
                                                <td>{{ $message->created_at?->diffForHumans() ?: 'No date' }}</td>
                                                <td>
                                                    <div class="btn-group w-100">
                                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#show-{{ $message->id }}">
                                                            Show
                                                        </button>
                                                        <form action="{{ route('dashboard.messages.delete', $message->id) }}" method="POST" class="w-100">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger w-100">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>








                                            <div class="modal fade" id="show-{{ $message->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">{{ $message->name }}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Phone : <span class="text-secondary">{{ $message->phone }}</span></p>
                                                            <p>E-mail : <span class="text-secondary">{{ $message->email }}</span></p>
                                                            <p style="margin-bottom: 5px">Message :</p>
                                                            <span class="text-sm">{{ $message->message }}</span>
                                                            <p class="text-secondary">date: {{ $message->created_at?->diffForHumans() ?: 'No date' }}</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>Phone</th>
                                            <th>message</th>
                                            <th>Date</th>
                                            <th>Control</th>
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


        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
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
