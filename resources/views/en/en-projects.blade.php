@extends('en.layout.app')

@section('content')
    <!-- about header  -->
    <!-- start header & nav  -->
    <header class="other-header" style="height: 50vh;">
        <!-- animated background -->
        <div id="bg"></div>
        <div class="overlay"></div>
        @include('en.layout.header')
        <!-- header text  -->
        <div class="header-text">
            <h1 class="text-light text-center mb-4 wow fadeIn" data-wow-delay=".2s" style="margin-top: 5vh;">Our Products
            </h1>
            <p class="text-light text-center fs-4 h2 mb-lg-5 mb-3 wow fadeIn" data-wow-delay=".3s">
                Your Gateway to a World of Creativity in Design and Development
            </p>
        </div>

    </header>

    <!-- start products sec  -->
    <section id="products">
        <div class="container">
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <!-- start col -->
                <div class="col">
                    @foreach ($projects as $project)
                    <div class="col-style position-relative rounded-3 overflow-hidden">
                        <img src="{{ asset('storage/' . $project->image) }}"
                            class="d-block w-100 h-100 object-fit-cover rounded-3" alt="">
                        <div
                            class="overlay position-absolute top-0 bottom-0 end-0 start-0 rounded-3 p-2 d-flex flex-column justify-content-center">
                            <h3 class="">{{ $project->name_en }}</h3>
                            <p>{{ $project->description_en }}</p>
                            <a href="{{ route('en.project.details', $project->id) }}" class="en-learn-more-page text-white">Learn more</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end products sec  -->
@endsection
