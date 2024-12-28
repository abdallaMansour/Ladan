@extends('dash_layouts.app')

@section('active_roles', 'active')
@section('active_link_add_role', 'active')
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
                        <h1>{{ __('roles.create.roles') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @if (App::currentLocale() == 'en')
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('roles.create.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.pages.roles') }}">{{ __('roles.create.roles') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('roles.create.create') }}</li>
                            @else
                                <li class="breadcrumb-item active">{{ __('roles.create.create') }}</li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.pages.roles') }}">{{ __('roles.create.roles') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('roles.create.home') }}</a></li>
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
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('roles.create.create_role') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" action="{{ route('dashboard.roles.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">{{ __('roles.create.name') }}</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('roles.create.name') }}" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="display_name_ar">{{ __('roles.create.display_name_ar') }}</label>
                                        <input type="text" name="display_name_ar" class="form-control" id="display_name_ar" placeholder="{{ __('roles.create.display_name_ar') }}" value="{{ old('display_name_ar') }}">
                                        @error('display_name_ar')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="display_name_en">{{ __('roles.create.display_name_en') }}</label>
                                        <input type="text" name="display_name_en" class="form-control" id="display_name_en" placeholder="{{ __('roles.create.display_name_en') }}" value="{{ old('display_name_en') }}">
                                        @error('display_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('roles.create.permissions') }}</label>
                                        <select name="permissions[]"
                                            class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;"
                                            multiple
                                            data-select2-id="permissions-select"
                                            tabindex="-1"
                                            aria-hidden="true">
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->id }}"
                                                    @if (isset($admin) && $admin->permissions->contains($permission->id)) selected @endif>
                                                    {{ $permission->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('permissions')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{ __('roles.create.submit') }}</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('footer')
    <!-- jquery-validation -->
    <script src="{{ asset('dashboard_assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dashboard_assets/dist/js/adminlte.min.js') }}"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $('#quickForm').validate({
                rules: {
                    name: {
                        required: true
                    },
                    permissions: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a valid email address"
                    },
                    terms: "Please accept our terms"
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection
