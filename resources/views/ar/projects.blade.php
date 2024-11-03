@extends('ar.layout.app')

@section('content')
    <!-- about header  -->
    <!-- start header & nav  -->
    <header class="other-header" style="height: 50vh;">
        <!-- animated background -->
        <div id="bg"></div>
        <div class="overlay"></div>
        @include('ar.layout.header')
        <!-- header text  -->
        <div class="header-text">
            <h1 class="text-light text-center mb-4 wow fadeIn" data-wow-delay=".2s" style="margin-top: 5vh;">منتجاتنا
            </h1>
            <p class="text-light text-center fs-4 h2 mb-lg-5 mb-3 wow fadeIn" data-wow-delay=".3s">
                بوابتك لعالم الابداع في التصميم والتطوير
            </p>
        </div>

    </header>

    <!-- start products sec  -->
    <section id="products">
        <div class="container">
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                @foreach ($projects as $project)
                    <!-- start col -->
                    <div class="col">
                        <div class="col-style position-relative rounded-3 overflow-hidden">
                            <img src="{{ asset('storage/' . $project->image) }}" class="d-block w-100 h-100 object-fit-cover rounded-3"
                                alt="">
                            <div class="overlay position-absolute top-0 bottom-0 end-0 start-0 rounded-3 p-2 d-flex flex-column justify-content-center">
                                <h3 class="">{{ $project->name_ar }}</h3>
                                <p>{{ $project->description_ar }}</p>
                                <a href="{{ route('project.details', $project->id) }}" class="learn-more">اعرف المزيد</a>
                            </div>
                        </div>
                    </div>
                    <!-- start col -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- end products sec  -->
@endsection
