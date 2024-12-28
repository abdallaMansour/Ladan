@extends('dash_layouts.app')

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
                        <h1>{{ auth()->user()->name }}</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('profile.profile_update') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">{{ __('profile.name') }}</label>
                                        <input value="{{ old('name') ?? auth()->user()->name }}" type="name" name="name" class="form-control" id="name" placeholder="{{ __('profile.name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">{{ __('profile.email') }}</label>
                                        <input value="{{ old('email') ?? auth()->user()->email }}" type="email" name="email" class="form-control" id="email" placeholder="{{ __('profile.email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">{{ __('profile.phone') }}</label>
                                        <input value="{{ old('phone') ?? auth()->user()->phone }}" type="phone" name="phone" class="form-control" id="phone" placeholder="{{ __('profile.phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">{{ __('profile.image') }}</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="profileImage(this)" name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">{{ __('profile.chose_image') }}</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">{{ __('profile.upload') }}</span>
                                            </div>
                                        </div>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <img id="profile-img"
                                            src="{{ auth()->user()->getFirstMediaUrl() ?: asset('images/default-user.jpg') }}"
                                            alt="profile image"
                                            width="100"
                                            height="100"
                                            class="img-circle elevation-2 mt-3">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{ __('profile.submit') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- Form Element sizes -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('profile.change_password') }}</h3>
                            </div>
                            <form action="{{ route('profile.password.update') }}" method="POST" class="card-body">
                                @csrf
                                <input name="old_password" class="form-control" type="password" placeholder="{{ __('profile.old_password') }}">
                                @error('old_password')
                                    <span class="text-danger mb-1 d-block">{{ $message }}</span>
                                @enderror
                                <br>
                                <input name="password" class="form-control" type="password" placeholder="{{ __('profile.new_password') }}">
                                @error('password')
                                    <span class="text-danger mb-1 d-block">{{ $message }}</span>
                                @enderror
                                <br>
                                <input name="password_confirmation" class="form-control" type="password" placeholder="{{ __('profile.password_confirmation') }}">
                                <br>
                                <button class="btn btn-primary" type="submit">{{ __('profile.update') }}</button>
                            </form>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
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
