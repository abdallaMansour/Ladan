@extends('dash_layouts.app')

@section('active_admins', 'active')
@section('active_link_add_admin', 'active')
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
                        <h1>{{ __('admins.create.admins') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @if (App::currentLocale() == 'en')
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('admins.create.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.pages.admins') }}">{{ __('admins.create.admins') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('admins.create.create_an_admin') }}</li>
                            @else
                                <li class="breadcrumb-item active">{{ __('admins.create.create_an_admin') }}</li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.pages.admins') }}">{{ __('admins.create.admins') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('admins.create.home') }}</a></li>
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
                                <h3 class="card-title">{{ __('admins.create.create_an_admin') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" action="{{ route('dashboard.admins.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">{{ __('admins.create.name') }}</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('admins.create.name') }}" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">{{ __('admins.create.phone') }}</label>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="{{ __('admins.create.phone') }}" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">{{ __('admins.create.email') }}</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="{{ __('admins.create.email') }}" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="password">{{ __('admins.create.password') }}</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="{{ __('admins.create.password') }}">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('admins.create.roles') }}</label>
                                        <select name="roles[]"
                                            class="form-control select2bs4 select2-hidden-accessible"
                                            style="width: 100%;"
                                            multiple
                                            data-select2-id="roles-select"
                                            tabindex="-1"
                                            aria-hidden="true">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}"
                                                    @if (isset($admin) && $admin->roles->contains($role->id)) selected @endif>
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('roles')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">{{ __('admins.create.image') }}</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="profileImage(this)" name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">{{ __('admins.create.chose_file') }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">{{ __('admins.create.upload') }}</span>
                                            </div>
                                        </div>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <img id="profile-img"
                                            src="{{ asset('images/default-user.jpg') }}"
                                            alt="profile image"
                                            width="100"
                                            height="100"
                                            class="img-circle elevation-2 mt-3">
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{ __('admins.create.create') }}</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
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
    <!-- jquery-validation -->
    <script src="{{ asset('dashboard_assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dashboard_assets/dist/js/adminlte.min.js') }}"></script>

    <!-- Page specific script -->
    <script>
        function profileImage(input) {
            if (input.files.length > 0) {
                let img = document.getElementById('profile-img');
                let src = URL.createObjectURL(input.files[0]);
                img.src = src;
            }
        }
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
