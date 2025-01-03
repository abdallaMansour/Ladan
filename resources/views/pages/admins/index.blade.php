@extends('dash_layouts.app')

@section('active_admins', 'active')
@section('active_link_admin', 'active')
@section('mode', 'dark')
@section('layout_style', 'dark-mode layout-fixed layout-navbar-fixed layout-footer-fixed')


@section('content')

    @php
        $users = \App\Models\User::where('type', 'admin')->where('id', '!=', auth()->id())->get();
    @endphp
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('admins.index.admins') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @if (App::currentLocale() == 'en')
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('admins.index.home') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('admins.index.admins') }}</li>
                            @else
                                <li class="breadcrumb-item active">{{ __('admins.index.admins') }}</li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('admins.index.home') }}</a></li>
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
                                <h3 class="card-title d-flex justify-content-between align-items-center w-100">{{ __('admins.index.admin_table') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('admins.index.name') }}</th>
                                            <th>{{ __('admins.index.email') }}</th>
                                            <th>{{ __('admins.index.phone') }}</th>
                                            <th>{{ __('admins.index.roles') }}</th>
                                            <th>{{ __('admins.index.image') }}</th>
                                            <th>{{ __('admins.index.control') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>
                                                    <div>
                                                        <button type="button" class="btn btn-primary " data-toggle="dropdown" aria-expanded="false">{{ __('admins.index.show_roles') }}</button>

                                                        <div class="dropdown-menu" role="menu" style="">
                                                            @foreach ($user->roles as $index => $role)
                                                                <a class="dropdown-item">{{ $role->name }}</a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="{{ $user->getFirstMediaUrl() ?: asset('images/default-user.jpg') }}" alt="image" width="50"></td>
                                                <td>
                                                    <div class="btn-group-vertical w-100">
                                                        <a href="{{ route('dashboard.pages.admins.update', $user->id) }}" class="btn btn-primary w-100">{{ __('admins.index.update') }}</a>
                                                        <form action="{{ route('dashboard.admins.delete', $user->id) }}" method="POST" class="w-100">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger w-100">{{ __('admins.index.delete') }}</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('admins.index.name') }}</th>
                                            <th>{{ __('admins.index.email') }}</th>
                                            <th>{{ __('admins.index.phone') }}</th>
                                            <th>{{ __('admins.index.roles') }}</th>
                                            <th>{{ __('admins.index.image') }}</th>
                                            <th>{{ __('admins.index.control') }}</th>
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
{{-- @section('footer')
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection --}}
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
