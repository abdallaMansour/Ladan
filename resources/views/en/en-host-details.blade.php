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
        </div>

    </header>
    <!-- end header & nav  -->

    <!-- start about-service section  -->
    <section id="about-service">
        <div class="container">
            <div class="d-flex align-items-end gap-3 title ser-title wow fadeIn" data-wow-delay=".2s">
                <img src="../assets/images/data-cloud-unscreen.gif" width="100px" class="my-3" alt="">
                <h5 class="text-dark fs-3 pb-4">Cloud Hosting</h5>
            </div>

            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".2s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    At Ledn Technology, we offer you high-quality, professional cloud hosting services.


                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".25s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    We provide your website with a stable and secure hosting environment, ensuring high loading speed
                    and excellent performance.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".3s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    Not only that, but our servers are also equipped with strong protection against electronic attacks,
                    ensuring that your website can operate efficiently without interruption or technical issues.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".35s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    If you need ample storage space and high bandwidth, our services cater to your needs with utmost
                    flexibility, whether your website is a small blog or a large-scale e-commerce platform.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".4s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    By choosing cloud hosting from ladan, you ensure an ideal environment for your website to grow and
                    expand according to your future needs.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".45s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>We subject our servers to regular testing to ensure the highest levels of performance and
                    stability. Attention to technical details is what sets our services apart.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".5s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    Choosing cloud hosting with ladan means that your website will always be ready to receive visitors
                    without performance issues.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".55s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    Our services are compatible with various content management systems and e-commerce platforms,
                    ensuring a smooth and easy experience in managing your website.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".6s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    Now, order cloud hosting service from Ledn Technology, and start an endless journey of success with
                    us.
                </span>
            </p>
        </div>
    </section>
    <!-- end about-service section  -->

    <!-- start features section  -->
    <section id="features">
        <div class="container">
            <div class="d-flex align-items-center gap-3 title wow fadeIn" data-wow-delay=".2s">
                <i class="fa-solid fa-angles-right fs-5 text-main pb-4"></i>
                <h5 class="text-dark fs-3 pb-4">مميزات الخدمة</h5>
            </div>
            <div class="row gap-5 justify-content-center px-2">
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s"
                    style="--clr:#F37121d7">
                    <div class="card-content ">
                        <div class="d-flex align-items-end justify-content-center  gap-3 title">
                            <h5 class="text-white fs-5 py-3 ">High Performance and Ultra-Fast Speed</h5>
                        </div>
                        <p class="my-4 text-white">
                            Our cloud servers ensure high performance and ultra-fast loading speed for your website,
                            improving user experience and increasing visitor satisfaction.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Advanced Security</h5>
                        </div>
                        <p class="my-4 text-white">
                            We provide strong protection against electronic attacks and ensure the security of your
                            data with advanced security technologies adopted in our services.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Scalability</h5>
                        </div>
                        <p class="my-4 text-white">
                            Our service is highly flexible, allowing you to easily increase hosting resources to meet
                            the growing needs of your website as it expands.

                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Stability and Reliability</h5>
                        </div>
                        <p class="my-4 text-white">
                            We guarantee stable and reliable hosting without interruptions, with a constant availability
                            of 99.9% to ensure that your website operates continuously.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Continuous Technical Support</h5>
                        </div>
                        <p class="my-4 text-white">
                            Our technical support team is available 24/7 to assist you in resolving any technical issues
                            you may encounter and ensure the smooth operation of your website.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Full Compatibility with Different Systems</h5>
                        </div>
                        <p class="my-4 text-white">
                            Our cloud hosting services are compatible with various content management systems and
                            e-commerce platforms, providing you with ease of management and integration.
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
