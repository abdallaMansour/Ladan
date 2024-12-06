@extends('dash_layouts.app')

@section('active_settings', 'active')
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
                        <h1>Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Settings</li>
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
                                <h3 class="card-title">Setting Update</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" action="{{ route('dashboard.settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old('name') ?? $settings->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="{{ old('phone') ?? $settings->phone }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') ?? $settings->email }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Facebook" value="{{ old('facebook') ?? $settings->facebook }}">
                                        @error('facebook')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <input type="text" name="instagram" class="form-control" id="instagram" placeholder="Instagram" value="{{ old('instagram') ?? $settings->instagram }}">
                                        @error('instagram')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="linkedin">Linkedin</label>
                                        <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="Linkedin" value="{{ old('linkedin') ?? $settings->linkedin }}">
                                        @error('linkedin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="whatsapp">Whatsapp</label>
                                        <input type="text" name="whatsapp" class="form-control" id="whatsapp" placeholder="Whatsapp" value="{{ old('whatsapp') ?? $settings->whatsapp }}">
                                        @error('whatsapp')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="address_ar">Address ar</label>
                                        <textarea name="address_ar" class="form-control" id="address_ar" placeholder="Address ar">{{ old('address_ar') ?? $settings->getTranslation('ar')->address }}</textarea>
                                        @error('address_ar')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="address_en">Address en</label>
                                        <textarea name="address_en" class="form-control" id="address_en" placeholder="Address en">{{ old('address_en') ?? $settings->getTranslation('en')->address }}</textarea>
                                        @error('address_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="dark_logo">Dark logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="changeDarkImage(this)" name="dark_logo" type="file" class="custom-file-input" id="dark_logo">
                                                <label class="custom-file-label" for="dark_logo">Choose image</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        @error('dark_logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <img id="dark-img"
                                            src="{{ $settings->getFirstMediaUrl('dark') }}"
                                            alt="profile image"
                                            style="max-width: 200px;max-height:200px"
                                            class="mt-3">
                                    </div>

                                    <div class="form-group">
                                        <label for="light_logo">Light logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="changeLightImage(this)" name="light_logo" type="file" class="custom-file-input" id="light_logo">
                                                <label class="custom-file-label" for="light_logo">Choose image</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        @error('light_logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <img id="light-img"
                                            src="{{ $settings->getFirstMediaUrl('light') }}"
                                            alt="profile image"
                                            style="max-width: 200px;max-height:200px"
                                            class="mt-3">
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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


        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
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
        function changeDarkImage(input) {
            if (input.files.length > 0) {
                let img = document.getElementById('dark-img');
                let src = URL.createObjectURL(input.files[0]);
                img.src = src;
            }
        }

        function changeLightImage(e) {
            if (e.files.length > 0) {
                let img = document.getElementById('light-img');
                let src = URL.createObjectURL(e.files[0]);
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
