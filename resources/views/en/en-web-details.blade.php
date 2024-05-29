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
                <img src="../assets/images/15591404-unscreen.gif" width="100px" class="my-3" alt="">
                <h5 class="text-dark fs-3 pb-4">Website Design and Development</h5>
            </div>

            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".2s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    For a website that stands out from competitors, the solution is simple: develop a fully customized
                    website tailored to your needs. </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".25s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    With Arab IT Solutions, we offer you website development services with the highest levels of
                    professionalism and quality.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".3s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    We provide your website with carefully crafted code to ensure you achieve unparalleled and
                    unparalleled results.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".35s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    Not only that, but our codes are organized and free of vulnerabilities, ensuring you have a website
                    capable of reaching advanced rankings in search engines. The speed and error-free nature of the
                    website are two factors highly valued by Google.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".4s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    If you need a specific script, we can execute it with superior quality, and if you're looking for
                    custom development for an e-commerce store, we're ready for that too.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".45s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    By obtaining custom development for your website, you've taken ten steps forward even before you
                    begin adding content or marketing your digital project.

                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".5s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    We subject the software to several rigorous tests before delivering it to you to ensure it is free
                    of any vulnerabilities. It's not just about assembling codes.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".55s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    Custom development ensures that your website will be unique and unlike any other.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".6s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    Now, request website development from Tech Solutions and start with us an endless journey of success.
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
                <h5 class="text-dark fs-3 pb-4">The service features</h5>
            </div>
            <div class="row gap-5 justify-content-center px-2">
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s"
                    style="--clr:#F37121d7">
                    <div class="card-content ">
                        <div class="d-flex align-items-end justify-content-center  gap-3 title">
                            <h5 class="text-white fs-5 py-3 ">Custom Design</h5>
                        </div>
                        <p class="my-4 text-white">
                            We work on designing custom websites that align with your brand identity. </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".25s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Excellent User Experience</h5>
                        </div>
                        <p class="my-4 text-white">
                            We ensure a smooth and engaging user experience that makes visiting your website enjoyable and easy. </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".3s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">High Responsiveness</h5>
                        </div>
                        <p class="my-4 text-white">
                            Responsive design that adapts to all devices and screens.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".35s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Search Engine Optimization (SEO)</h5>
                        </div>
                        <p class="my-4 text-white">
                            Building SEO-optimized websites to increase your online visibility. </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".4s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Security and Protection</h5>
                        </div>
                        <p class="my-4 text-white">
                            Implementing the latest security technologies to protect your website and its visitors' data. </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".45s"
                    style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">Continuous Technical Support</h5>
                        </div>
                        <p class="my-4 text-white">
                            We offer continuous technical support to ensure your website operates efficiently at all times. </p>
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
                        <input type="text" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".4s">
                        <label class="form-label text-dark2">Email</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".5s">
                        <label class="form-label text-dark2">Phone Number</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".6s">
                        <label class="form-label text-dark2">Request Your Service</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-main w-100 text-center text-white border-0 outline-0 py-2 rounded-2 wow fadeInUp"
                        data-wow-delay=".7s">submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- end contact sec  -->
@endsection
