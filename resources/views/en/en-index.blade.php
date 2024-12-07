@extends('en.layout.app')

@section('content')
    <!-- start header & nav  -->
    <header id="header">
        <!-- animated background -->
        <div id="bg"></div>
        @include('en.layout.header')
        <!-- header text  -->
        <div class="header-text text-center">
            <h1 class="text-light text-center mb-4  wow fadeIn" data-wow-delay=".2s">Ledn Arabia for Information
                Technology</h1>
            <p class="text-light text-center fs-2 h2 mb-lg-5 mb-3 wow fadeIn" data-wow-delay=".3s">
                A leading company in the field of providing
                <span class="typed-text typed-in-en text-main"></span>
                <span class="cursor">&nbsp;</span>
            </p>
            <p class="text-center text-light fs-3 mb-4 wow fadeIn" data-wow-delay=".4s">
                We form a trusted partner that inspires your confidence and earns your appreciation
            </p>
            <a href="{{ route('en.about') }}" class="en-learn-more fs-5 wow fadeIn" data-wow-delay=".5s">Learn more</a>
        </div>

        <a href="#about" class="wow fadeIn" data-wow-delay=".6s">
            <div class="scroll-down"></div>
        </a>
    </header>
    <!-- end header & nav  -->

    <!-- start about sec -->
    <section id="about">
        <div class="container">
            <h3 class="title text-dark fs-3 wow fadeIn" data-wow-delay=".2s">ABOUT US</h3>
            <div class="row align-items-center">
                <img src="../assets/images/Remote team-pana.svg" class="col-12 col-lg-6 wow fadeInRight"
                    data-wow-delay=".3s" width="90%" alt="">
                <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                    <p class="fs-4 lh-base">
                        As pioneers in providing comprehensive technological solutions, we move forward with passion and
                        determination to be the leading company in the field of information technology. We are
                        distinguished by a clear vision and extensive experience in various domains, always striving to
                        deliver unique and innovative solutions that meet the evolving needs of our clients. Our new and
                        impressive services reflect our commitment to excellence and superiority, giving us the
                        opportunity to build strong and sustainable relationships with our clients and achieve mutual
                        success.
                    </p>

                    <a href="{{ route('en.about') }}" class="en-learn-more-page text-white fs-5">Learn more</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- end about sec  -->

    <!-- start services sec  -->
    <section id="services" class="my-0">
        <div class="position-absolute top-0 start-0 end-0 bottom-0">
            <i class="fa-solid fa-braille sticky1"></i>
            <i class="fa-solid fa-braille sticky2"></i>
        </div>
        <div class="container">
            <h3 class="title text-dark fs-3 wow fadeIn" data-wow-delay=".2s">Our Services</h3>
            <div>
                <div class="row justify-content-center gap-5 my-5">
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".2s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="../assets/images/data-cloud-unscreen.gif" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">Cloud Hosting</h5>
                        </div>
                        <p class="my-4 text-dark">
                            Hosting services are the foundation for providing a reliable and advanced environment for
                            your website, with speed, stability, and comprehensive security.
                        </p>
                        <a href="{{ route('en.host-details') }}" class="en-learn-more-page text-white fs-6">Learn more</a>

                    </div>
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".3s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="../assets/images/15591404-unscreen.gif" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">Website Design and Development</h5>
                        </div>
                        <p class="my-4 text-dark">
                            We offer website design and development services to establish your digital presence in a
                            professional and attractive manner.
                        </p>
                        <a href="{{ route('en.web-details') }}" class="en-learn-more-page text-white fs-6">Learn more</a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".4s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="../assets/images/smartphone-unscreen.gif" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">Mobile App Development</h5>
                        </div>
                        <p class="my-4 text-dark">
                            We provide mobile app development services to transform your ideas into innovative and
                            distinguished applications on multiple platforms.
                        </p>
                        <a href="{{ route('en.mobile-details') }}" class="en-learn-more-page text-white fs-6">Learn more</a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".5s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="../assets/images/computer-unscreen.gif" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">UI/UX Design</h5>
                        </div>
                        <p class="my-4 text-dark">
                            We offer UI/UX design services to create innovative and inspiring user experiences that
                            enhance user interaction with your digital products.
                        </p>
                        <a href="{{ route('en.ux-ui-details') }}" class="en-learn-more-page text-white fs-6">Learn more</a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".6s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="../assets/images/global-connection-unscreen.gif" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">Network Solutions and Cybersecurity</h5>
                        </div>
                        <p class="my-4 text-dark">
                            We provide comprehensive solutions for networks and cybersecurity, offering strong
                            protection to ensure the security of your data and the stability of your network.
                        </p>
                        <a href="{{ route('en.network-details') }}" class="en-learn-more-page text-white fs-6">Learn more</a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".7s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="../assets/images/edc-unscreen.gif" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">Off-the-Shelf Software and Point of Sale Services</h5>
                        </div>
                        <p class="my-4 text-dark">
                            We offer ready-made software solutions and integrated point-of-sale services to meet your
                            needs in business management and sales efficiency.
                        </p>
                        <a href="{{ route('en.pos-details') }}" class="en-learn-more-page text-white fs-6">Learn more</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end services sec  -->

    <!-- start services sec  -->
    {{-- <section id="services" class="my-0">
        <div class="position-absolute top-0 start-0 end-0 bottom-0">
            <i class="fa-solid fa-braille sticky1"></i>
            <i class="fa-solid fa-braille sticky2"></i>
        </div>
        <div class="container">
            <h3 class="title text-dark fs-3 wow fadeIn" data-wow-delay=".2s">Our Projects</h3>
            <div>
                <div class="row justify-content-center gap-5 my-5">
                    @foreach ($projects as $project)
                        <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".2s">
                            <div class="d-flex align-items-end gap-3 title">
                                <img src="{{ asset('storage/' . $project->image) }}" width="70px" class="my-3" alt="">
                                <h5 class="text-dark fs-5 pb-4">{{ $project->name_en }}</h5>
                            </div>
                            <p class="my-4 text-dark">{{ $project->description_en }}</p>
                            <a href="{{ route('en.project.details', $project->id) }}" class="en-learn-more-page text-white fs-6">Learn more</a>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section> --}}
    <!-- end services sec  -->
    <!-- start clients section -->
    {{-- <section id="client">
        <div class="container">
            <h3 class="title text-dark fs-3 wow fadeIn" data-wow-delay=".2s">Our Clients</h3>
            <div class="row justify-content-center gap-3 mt-5 align-items-center m-0">
                <h4 class=" col-xl-6 col-lg-4  text-dark mt-3 ms-auto me-5 lh-lg d-flex gap-3 align-items-start wow slideInLeft"
                    data-wow-delay=".2s">
                    <i class="fa-solid fa-angles-right text-main mt-3"></i>
                    We take pride in our esteemed clients, and their success drives us to provide the best technological
                    solutions and successfully achieve their future vision.
                </h4>
                <div class="col-xl-3 col-lg-3 col-5 c-content d-flex justify-content-center align-items-center wow slideInRight"
                    data-wow-delay=".2s">
                    <img src="../assets/images/loaded.png" width="180px" alt="">
                </div>
                <div class="col-xl-3 col-lg-3 col-5 c-content d-flex justify-content-center align-items-center ms-5 wow slideInRight"
                    data-wow-delay=".3s">
                    <img src="../assets/images/WhatsApp Image 2024-05-18 at 09.23.25.jpeg" width="180px" alt="">
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end clients section -->

    <!-- start contact sec  -->
    <section id="contact" class="my-0">
        <div class="container">
            <h3 class="title text-dark fs-3 wow fadeIn" data-wow-delay=".2s">Contact US</h3>
            <div class="row py-md-5 py-3 rounded-4 justify-content-center align-items-center">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/Call center-cuate.svg') }}" class="wow fadeIn" data-wow-delay=".3s" width="100%" alt="">
                </div>
                <form action="{{ route('en.message.create') }}" method="POST" class="col-lg-5">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                        <label class="form-label text-dark2" for="name">Full name</label>
                        <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".4s">
                        <label class="form-label text-dark2" for="email">Email</label>
                        <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".5s">
                        <label class="form-label text-dark2" for="phone">Phone number</label>
                        <input value="{{ old('phone') }}" name="phone" type="text" class="form-control" id="phone" aria-describedby="emailHelp">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".6s">
                        <label class="form-label text-dark2" for="service">Request Your Service</label>
                        <textarea name="message" class="form-control" id="service">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="bg-main w-100 text-center text-white border-0 outline-0 py-2 rounded-2 wow fadeInUp" data-wow-delay=".7s">Send</button>
                </form>
            </div>
        </div>
    </section>


    <span id="send-btn"></span>
    <!-- end contact sec  -->
@endsection
