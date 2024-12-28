@extends('dash_layouts.app')

@section('active_roles', 'active')
@section('active_link_role', 'active')
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
                        <h1>{{ __('roles.index.roles') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @if (App::currentLocale() == 'en')
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('roles.index.home') }}</a></li>
                                <li class="breadcrumb-item">{{ __('roles.index.roles') }}</li>
                            @else
                                <li class="breadcrumb-item">{{ __('roles.index.roles') }}</li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('roles.index.home') }}</a></li>
                            @endif
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
                                <h3 class="card-title d-flex justify-content-between align-items-center w-100">{{ __('roles.index.role_table') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('roles.index.name') }}</th>
                                            <th>{{ __('roles.index.permissions') }}</th>
                                            <th>{{ __('roles.index.control') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td>{{ $role->id }}</td>
                                                <td>{{ $role->display_name }}</td>
                                                <td>
                                                    <div>
                                                        <button type="button" class="btn btn-primary " data-toggle="dropdown" aria-expanded="false">{{ __('roles.index.show_permissions') }}</button>

                                                        <div class="dropdown-menu" role="menu" style="">
                                                            @foreach ($role->permissions as $permission)
                                                                <a class="dropdown-item">{{ $permission->name }}</a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group-vertical w-100">
                                                        <a href="{{ route('dashboard.pages.roles.update', $role->id) }}" class="btn btn-primary w-100">{{ __('roles.index.update') }}</a>
                                                        <form action="{{ route('dashboard.roles.delete', $role->id) }}" method="POST" class="w-100">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger w-100">{{ __('roles.index.delete') }}</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('roles.index.name') }}</th>
                                            <th>{{ __('roles.index.permissions') }}</th>
                                            <th>{{ __('roles.index.control') }}</th>
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
