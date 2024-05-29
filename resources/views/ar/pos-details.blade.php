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
            <h1 class="text-light text-center mb-4 wow fadeIn" data-wow-delay=".2s" style="margin-top: 5vh;">تعرف على خدماتنا المتميزة</h1>
            <p class="text-light text-center fs-4 h2 mb-lg-5 mb-3 wow fadeIn" data-wow-delay=".3s">
                نقدم حلولاً مبتكرة تلبي احتياجات عملك
            </p>
        </div>

    </header>
    <!-- end header & nav  -->

    <!-- start about-service section  -->
    <section id="about-service">
        <div class="container">
            <div class="d-flex align-items-end gap-3 title ser-title wow fadeIn" data-wow-delay=".2s">
                <img src="../assets/images/edc-unscreen.gif" width="100px" class="my-3" alt="">
                <h5 class="text-dark fs-3 pb-4">خدمات البرامج الجاهزة ونقاط البيع</h5>
            </div>

            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".2s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    في لدن العربية، نقدم لك خدمة البرامج الجاهزة ونقاط البيع التي تتميز بالاحترافية العالية والجودة
                    الفائقة.


                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".25s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    نحن نضمن لك برامج جاهزة تلبي احتياجات أعمالك المختلفة ونقاط بيع متطورة تسهل عمليات البيع والإدارة.

                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".3s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    ليس هذا فقط، بل نقدم حلولاً متكاملة لإدارة المخزون والمبيعات وتقارير تحليل الأداء، مما يجعل عملياتك
                    أكثر كفاءة وفعالية.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".35s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    إذا كنت تحتاج إلى نظام نقاط بيع متكامل يدعم توسع أعمالك أو برامج جاهزة لتسهيل إدارة عملياتك اليومية،
                    فإن خدماتنا تلبي احتياجاتك بمرونة تامة.

                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".4s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    مع اختيارك لخدمات البرامج الجاهزة ونقاط البيع من [اسم الشركة]، فأنت تضمن حلاً متكاملاً يساعدك على
                    تحسين أداء أعمالك وزيادة مبيعاتك.


                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".45s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    نحن نستخدم أحدث التقنيات وأفضل الممارسات لضمان أن تكون حلولنا متوافقة مع متطلبات السوق وتلبي
                    توقعاتك.


                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".5s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    حصولك على خدمات البرامج الجاهزة ونقاط البيع معنا يعني أنك تستثمر في مستقبل ناجح ومضمون لأعمالك.


                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".55s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    نقدم استشارات ودعم فني مستمر لضمان تحديث وصيانة البرامج ونقاط البيع بانتظام.


                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5  wow fadeInUp" data-wow-delay=".6s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    اطلب الآن خدمة البرامج الجاهزة ونقاط البيع من لدن العربية، وابدأ معنا رحلة نجاح لا تنتهي.


                </span>
            </p>
        </div>
    </section>
    <!-- end about-service section  -->

    <!-- start features section  -->
    <section id="features">
        <div class="container">
            <div class="d-flex align-items-center gap-3 title wow fadeIn" data-wow-delay=".2s">
                <i class="fa-solid fa-angles-left fs-5 text-main pb-4"></i>
                <h5 class="text-dark fs-3 pb-4">مميزات الخدمة</h5>
            </div>
            <div class="row gap-5 justify-content-center px-2">
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content ">
                        <div class="d-flex align-items-end justify-content-center  gap-3 title">
                            <h5 class="text-white fs-5 py-3 ">حلول متكاملة</h5>
                        </div>
                        <p class="my-4 text-white">
                            نقدم حلولاً متكاملة تشمل إدارة المخزون والمبيعات وتقارير تحليل الأداء.


                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".25s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">نقاط بيع متطورة</h5>
                        </div>
                        <p class="my-4 text-white">
                            نوفر نقاط بيع متطورة تسهل عمليات البيع والإدارة وتدعم توسع أعمالك.

                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".3s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">برامج جاهزة</h5>
                        </div>
                        <p class="my-4 text-white">
                            نوفر برامج جاهزة تلبي احتياجات أعمالك المختلفة وتجعل عملياتك أكثر كفاءة.

                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".35s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">تحديث وصيانة مستمرة</h5>
                        </div>
                        <p class="my-4 text-white">
                            نقدم خدمات تحديث وصيانة مستمرة لضمان استقرار وأداء الحلول.


                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".4s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">استخدام أحدث التقنيات</h5>
                        </div>
                        <p class="my-4 text-white">
                            نعتمد على أحدث التقنيات وأفضل الممارسات لضمان توافق حلولنا مع متطلبات السوق.

                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".45s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">دعم فني واستشارات</h5>
                        </div>
                        <p class="my-4 text-white">
                            نقدم استشارات ودعم فني مستمر لضمان تحسين وتحديث الحلول بانتظام.

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
            <h3 class="title text-dark fs-3 wow fadeIn" data-wow-delay=".2s">اطلب خدمتك الان</h3>
            <div class="row py-md-5 py-3 rounded-4 justify-content-center align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay=".3s">
                    <img src="../assets/images/Call center-cuate.svg" width="100%" alt="">
                </div>
                <form class="col-lg-5">
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                        <label class="form-label text-dark2">الاسم كامل</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".4s">
                        <label class="form-label text-dark2">البريد الالكتروني</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".5s">
                        <label class="form-label text-dark2">رقم التواصل</label>
                        <input type="text" class="form-control" id="phone" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".6s">
                        <label class="form-label text-dark2">اطلب خدمتك</label>
                        <textarea class="form-control" id="service"></textarea>
                    </div>
                    <button type="submit" id="send-btn" onclick="whatsapp()"
                        class="bg-main w-100 text-center text-white border-0 outline-0 py-2 rounded-2 wow fadeInUp" data-wow-delay=".7s">ارسال</button>
                </form>
            </div>
        </div>
    </section>
    <!-- end contact sec  -->
@endsection
