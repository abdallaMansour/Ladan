@extends('dash_layouts.app')

@section('active_link_seo_' . $page, 'active')
@section('active_nav_seo', 'active')
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
                        <h1>{{ __('seo.seo') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            
                            @if (App::currentLocale() == 'en')
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('seo.home') }}</a></li>
                                <li class="breadcrumb-item">{{ __('seo.seo') }}</li>
                            @else
                                <li class="breadcrumb-item">{{ __('seo.seo') }}</li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.main') }}">{{ __('seo.home') }}</a></li>
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
                                <h3 class="card-title">{{ __('seo.update_' . $page) }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" action="{{ route('dashboard.seos.update', $page) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    @if ($page == 'home')
                                        <div class="form-group">
                                            <label for="site_name_ar">{{ __('seo.edit.site_name_ar') }}</label>
                                            <input type="text" name="site_name_ar" class="form-control" id="site_name_ar" placeholder="{{ __('seo.edit.site_name_ar') }}"
                                                value="{{ old('site_name_ar') ?? $seo->getTranslation('ar')->site_name }}">
                                            @error('site_name_ar')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="site_name_en">{{ __('seo.edit.site_name_en') }}</label>
                                            <input type="text" name="site_name_en" class="form-control" id="site_name_en" placeholder="{{ __('seo.edit.site_name_en') }}"
                                                value="{{ old('site_name_en') ?? $seo->getTranslation('en')->site_name }}">
                                            @error('site_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    @endif


                                    <div class="form-group">
                                        <label for="title_ar">{{ __('seo.edit.title_ar') }}</label>
                                        <input type="text" name="title_ar" class="form-control" id="title_ar" placeholder="{{ __('seo.edit.title_ar') }}" value="{{ old('title_ar') ?? $seo->getTranslation('ar')->title }}">
                                        @error('title_ar')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title_en">{{ __('seo.edit.title_en') }}</label>
                                        <input type="text" name="title_en" class="form-control" id="title_en" placeholder="{{ __('seo.edit.title_en') }}" value="{{ old('title_en') ?? $seo->getTranslation('en')->title }}">
                                        @error('title_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="description_ar">{{ __('seo.edit.description_ar') }}</label>
                                        <textarea class="form-control" name="description_ar" placeholder="{{ __('seo.edit.description_ar') }}" id="description_ar" cols="30" rows="10">{{ old('description_ar') ?? $seo->getTranslation('ar')->description }}</textarea>
                                        @error('description_ar')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description_en">{{ __('seo.edit.description_en') }}</label>
                                        <textarea class="form-control" name="description_en" placeholder="{{ __('seo.edit.description_en') }}" id="description_en" cols="30" rows="10">{{ old('description_en') ?? $seo->getTranslation('en')->description }}</textarea>
                                        @error('description_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="keyword_ar">{{ __('seo.edit.keyword_ar') }}</label>
                                        <textarea class="form-control" name="keyword_ar" placeholder="{{ __('seo.edit.keyword_ar') }}" id="keyword_ar" cols="30" rows="10">{{ old('keyword_ar') ?? $seo->getTranslation('ar')->keyword }}</textarea>
                                        @error('keyword_ar')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="keyword_en">{{ __('seo.edit.keyword_en') }}</label>
                                        <textarea class="form-control" name="keyword_en" placeholder="{{ __('seo.edit.keyword_en') }}" id="keyword_en" cols="30" rows="10">{{ old('keyword_en') ?? $seo->getTranslation('en')->keyword }}</textarea>
                                        @error('keyword_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    @if ($page == 'home')
                                        <div class="form-group">
                                            <label for="exampleInputFile">{{ __('seo.edit.image') }}</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input onchange="changeImage(this)" name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">{{ __('seo.edit.chose_file') }}</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">{{ __('seo.edit.update') }}</span>
                                                </div>
                                            </div>
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <img id="site-img"
                                                src="{{ $seo->getFirstMediaUrl('image') }}"
                                                alt="profile image"
                                                width="100"
                                                height="100"
                                                class="img-circle elevation-2 mt-3">
                                        </div>
                                    @endif


                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{ __('seo.edit.submit') }}</button>
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
        function changeImage(input) {
            if (input.files.length > 0) {
                let img = document.getElementById('site-img');
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
