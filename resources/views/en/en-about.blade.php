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
            <h1 class="text-light text-center mb-4 wow fadeIn" data-wow-delay=".2s" style="margin-top: 5vh;">Who We Are
            </h1>
            <p class="text-light text-center fs-4 h2 mb-lg-5 mb-3 wow fadeIn" data-wow-delay=".3s">
                Discover all the services offered by Loden Arabia to ensure your digital success
            </p>
        </div>

    </header>
    <!-- end header & nav  -->
    <!-- start about sec  -->
    <section>
        <div class="container">
            <!-- about title  -->
            <div class="title d-flex gap-3 align-items-center wow fadeIn" data-wow-delay=".2s">
                <i class="fa-solid fa-angles-right text-main"></i>
                <h3 class=" text-dark fs-3">Get to know all our services that we offer to you</h3>
            </div>
            <div class="row align-items-center about">
                <img src="../assets/images/Startup life-pana.svg" class="col-12 col-lg-6 wow fadeInRight"
                    data-wow-delay=".3s" alt="">
                <div class="about-text col-12 col-lg-6">
                    <p class="text-dark2 fs-5 wow fadeInUp" data-wow-delay=".3s">
                        At Loden Arabia for Information Technology, we strive for innovation and advancement in
                        integrated technological solutions. We aim to lead in the field of information technology with
                        passion and dedication, committed to an inspiring vision that propels us towards excellence.
                    </p>
                    <p class="text-dark2 fs-5 wow fadeInUp" data-wow-delay=".4s">
                        With our extensive experience, we provide innovative solutions that exceed our clients'
                        expectations. Over the years, our accumulated expertise enables us to understand challenges and
                        meet your needs efficiently.
                    </p>
                    <p class="text-dark2 fs-5 wow fadeInUp" data-wow-delay=".5s">
                        We are committed to providing inspiring and innovative technological solutions, designed
                        specifically to meet the needs of our clients. We believe that success is built on collaboration
                        and strong relationships, and we work to build long-term partnerships based on trust.
                    </p>
                    <p class="text-dark2 fs-5 wow fadeInUp" data-wow-delay=".6s">
                        We are committed to providing inspiring and innovative technological solutions, designed
                        specifically to meet the needs of our clients. We believe that success is built on collaboration
                        and strong relationships, and we work to build long-term partnerships based on trust.
                    </p>
                    <p class="text-dark2 fs-5 wow fadeInUp" data-wow-delay=".7s">
                        Our services are a gateway to realizing your dreams. We offer advanced technologies and robust
                        infrastructure to ensure performance speed, system stability, and data security. We aim to turn
                        every challenge into an opportunity for excellence and distinction.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end about sec  -->
    <!-- start message sec  -->
    <section>
        <div class="container">
            <div class="row message justify-content-center gap-5 px-4">
                <div class="col-12 col-lg-5 message-card wow fadeInUp" data-wow-delay=".3s">
                    <div class="img">
                        <img src="../assets/images/solution.gif" alt="">
                        <h3 class="text-dark2">Our Vision</h3>
                        <p class="fs-5 text-dark mt-3 mb-4">
                            With excellence and creativity, we aim to provide integrated information technology
                            solutions that meet our clients' needs and contribute to achieving their goals. We form a
                            trusted partner that inspires their confidence and earns their appreciation.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-5 message-card wow fadeInUp" data-wow-delay=".5s">
                    <div class="img">
                        <img src="../assets/images/paper-plane.gif" alt="">
                        <h3 class="text-dark2">Our Mission</h3>
                        <p class="fs-5 text-dark mt-3 mb-4">
                            To be the leading company in providing information technology solutions in the region, known
                            for our excellence in delivering high-quality services, continuous innovation, and
                            commitment to meeting our clients' needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end message sec  -->
@endsection
