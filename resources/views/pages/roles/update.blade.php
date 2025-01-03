@extends('dash_layouts.app')

@section('active_roles', 'active')
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
                        <h1>{{ __('roles.update.roles') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                            @if (App::currentLocale() == 'en')
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('roles.update.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.pages.roles') }}">{{ __('roles.update.roles') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('roles.update.update') }}</li>
                            @else
                                <li class="breadcrumb-item active">{{ __('roles.update.update') }}</li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.pages.roles') }}">{{ __('roles.update.roles') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('roles.update.home') }}</a></li>
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
                                <h3 class="card-title">{{ __('roles.update.update_role') . ' ' . $role->display_name }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" action="{{ route('dashboard.roles.update', $role->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">{{ __('roles.update.name') }}</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('roles.update.name') }}" value="{{ old('name') ?? $role->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="display_name_ar">{{ __('roles.update.display_name_ar') }}</label>
                                        <input type="text" name="display_name_ar" class="form-control" id="display_name_ar" placeholder="{{ __('roles.update.display_name_ar') }}" value="{{ old('display_name_ar') ?? $role->getTranslation('ar')->display_name }}">
                                        @error('display_name_ar')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="display_name_en">{{ __('roles.update.display_name_en') }}</label>
                                        <input type="text" name="display_name_en" class="form-control" id="display_name_en" placeholder="{{ __('roles.update.display_name_en') }}" value="{{ old('display_name_en') ?? $role->getTranslation('en')->display_name }}">
                                        @error('display_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('roles.update.permissions') }}</label>
                                        <select name="permissions[]"
                                            class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;height: 200px"
                                            multiple
                                            data-select2-id="permissions-select"
                                            tabindex="-1"
                                            aria-hidden="true">
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->id }}"
                                                    @if (isset($role) && $role->permissions->contains($permission->id)) selected @endif>
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
                                    <button type="submit" class="btn btn-primary">{{ __('roles.update.submit') }}</button>
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
                    email: {
                        required: true,
                        email: true,
                    },
                    phone: {
                        required: true,
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    name: {
                        required: true
                    },
                    roles: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a valid email address"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
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
