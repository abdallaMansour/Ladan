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
            <h1 class="text-light text-center mb-4 wow fadeIn" data-wow-delay=".2s" style="margin-top: 5vh;">Get to know
                our outstanding services</h1>
            <p class="text-light text-center fs-4 h2 mb-lg-5 mb-3 wow fadeIn" data-wow-delay=".3s">
                We offer innovative solutions that meet your business needs
            </p>

    </header>
    <!-- end header & nav  -->

    <!-- start about-service section  -->
    <section id="about-service">
        <div class="container">
            <div class="d-flex align-items-end gap-3 title ser-title wow fadeIn" data-wow-delay=".2s">
                <img src="../assets/images/edc-unscreen.gif" width="100px" class="my-3" alt="">
                <h5 class="text-dark fs-3 pb-4">Ready-made Software Services and Point of Sale (POS)</h5>
            </div>

            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".2s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    In the Arab world, we offer you ready-made software services and point of sale solutions
                    distinguished by high professionalism and supreme quality.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".25s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    We guarantee ready-made software that meets the diverse needs of your business, along with advanced
                    point of sale systems that streamline sales and management operations.

                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".3s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    Not only that, but we also provide integrated solutions for inventory management, sales, and
                    performance analysis reports, making your operations more efficient and effective.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".35s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    If you need an integrated point of sale system to support the expansion of your business or
                    ready-made software to facilitate the management of your daily operations, our services cater to
                    your needs with utmost flexibility.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".4s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    With your choice of ready-made software services and point of sale solutions from [Company Name],
                    you ensure a comprehensive solution that helps you improve your business performance and increase
                    your sales.

                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".45s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    We utilize the latest technologies and best practices to ensure that our solutions are compatible
                    with market requirements and meet your expectations.


                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".5s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    Choosing our ready-made software services and point of sale solutions means investing in a
                    successful and guaranteed future for your business.

                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".55s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    We offer continuous consulting and technical support to ensure regular updates and maintenance of
                    the software and point of sale systems.

                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".6s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    Now, request the ready-made software services and point of sale solutions from Arab Tech, and start
                    with us an endless journey of success.

                </span>
            </p>
        </div>
    </section>
    <!-- end about-service section  -->

    <!-- start features section  -->
    <section id="features">
        <div class="container">
            <div class="d-flex align-items-center gap-3 title wow fadeIn" data-wow-delay=".2s">
                <i class="fa-solid fa-angles-righs fs-5 text-main pb-4"></i>
                <h5 class="text-dark fs-3 pb-4">The service features</h5>
            </div>
            <div class="row gap-5 justify-content-center px-2">
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s"
                    style="--clr:#F37121d7">
                    <div class="card-content ">
                        <div class="d-flex align-items-end justify-content-center  gap-3 title">
                            <h5 class="text-white fs-5 py-3 ">Integrated Solutions</h5>
                        </div>
                        <p class="my-4 text-white">
                            We offer integrated solutions that encompass inventory management, sales, and performance
                            analysis reports.

                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".25s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Advanced Point of Sale</h5>
                        </div>
                        <p class="my-4 text-white">
                            We provide advanced point of sale systems that streamline sales and management operations,
                            supporting the expansion of your business.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".3s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Ready-made Software</h5>
                        </div>
                        <p class="my-4 text-white">
                            We offer ready-made software that meets the diverse needs of your business and makes your
                            operations more efficient.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".35s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Continuous Updating and Maintenance</h5>
                        </div>
                        <p class="my-4 text-white">
                            We provide continuous updating and maintenance services to ensure the stability and
                            performance of the solutions.

                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".4s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Utilization of Latest Technologies</h5>
                        </div>
                        <p class="my-4 text-white">
                            We rely on the latest technologies and best practices to ensure that our solutions are
                            compatible with market requirements.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".45s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Technical Support and Consultations</h5>
                        </div>
                        <p class="my-4 text-white">
                            We offer continuous technical support and consultations to ensure regular improvement and updating of the solutions.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- end features section  -->


    <!-- start contact sec  -->
    <section id="contact" class="my-0 bg-transparent">
        <div class="container">
            <h3 class="title text-dark fs-3 wow fadeIn" data-wow-delay=".2s">Order your service now</h3>
            <div class="row py-md-5 py-3 rounded-4 justify-content-center align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay=".3s">
                    <img src="../assets/images/Call center-cuate.svg" width="100%" alt="">
                </div>
                <form class="col-lg-5">
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                        <label class="form-label text-dark2">Full Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".4s">
                        <label class="form-label text-dark2">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".5s">
                        <label class="form-label text-dark2">Phone Number</label>
                        <input type="text" class="form-control" id="phone" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".6s">
                        <label class="form-label text-dark2">Request Your Service</label>
                        <textarea class="form-control" id="servers"></textarea>
                    </div>
                    <button type="submit" id="send-btn" onclick="whatsapp()"
                        class="bg-main w-100 text-center text-white border-0 outline-0 py-2 rounded-2 wow fadeInUp"
                        data-wow-delay=".7s">submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- end contact sec  -->
@endsection
