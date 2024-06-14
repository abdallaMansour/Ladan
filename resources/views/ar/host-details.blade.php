@extends('ar.layout.app')

@section('content')

    <!-- about header  -->
    <!-- start header & nav  -->
    <header class="other-header" style="height: 50vh;">
        <!-- animated background -->
        <div id="bg"></div>
        <div class="overlay"></div>
        @include('ar.layout.header')
        <!-- header text -->
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
                <img src="{{ asset('assets/images/data-cloud-unscreen.gif') }}" width="100px" class="my-3" alt="">
                <h5 class="text-dark fs-3 pb-4">استضافة سحابية</h5>
            </div>

            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".2s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    في لدن التقنية، نقدم لك خدمة الاستضافة السحابية التي تتميز بالاحترافية العالية والجودة الفائقة.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".25s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    نؤمن لموقعك بيئة استضافة مستقرة وآمنة تضمن لك سرعة تحميل عالية وأداء متميز.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".3s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    ليس هذا فقط، بل تتميز خوادمنا بالحماية القوية من الهجمات الإلكترونية، مما يجعل موقعك قادراً على العمل بكفاءة دون انقطاع أو مشاكل تقنية.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".35s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    إذا كنت تحتاج إلى مساحة تخزين كبيرة وسعة نقل بيانات عالية، فإن خدماتنا تلبي احتياجاتك بمرونة تامة، سواء كان موقعك مدونة صغيرة أو منصة تجارة إلكترونية ضخمة.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".4s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    مع اختيارك للاستضافة السحابية من لدن العربية، فأنت تضمن بيئة مثالية لموقعك الإلكتروني تنمو معك وتتوسع حسب احتياجاتك المستقبلية.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".45s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    نخضع خوادمنا لاختبارات دورية لضمان أعلى مستويات الأداء والاستقرار، فالاهتمام بالتفاصيل التقنية هو ما يميز خدماتنا.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".5s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    حصولك على استضافة سحابية مع لدن العربية يعني أن موقعك سيكون دائماً جاهزاً لاستقبال الزوار دون مشاكل في الأداء.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".55s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    خدماتنا متوافقة مع مختلف أنظمة إدارة المحتوى ومنصات التجارة الإلكترونية، مما يضمن لك تجربة سلسة وسهلة في إدارة موقعك.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".6s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    اطلب الآن خدمة الاستضافة السحابية من لدن التقنية، وابدأ معنا رحلة نجاح لا تنتهي.
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
                            <h5 class="text-white fs-5 py-3 ">أداء عالي وسرعة فائقة</h5>
                        </div>
                        <p class="my-4 text-white">
                            تضمن خوادمنا السحابية أداءً عاليًا وسرعة تحميل فائقة لموقعك، مما يحسن تجربة المستخدم ويزيد من رضى الزوار.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">أمان متقدم</h5>
                        </div>
                        <p class="my-4 text-white">
                            نقدم حماية قوية ضد الهجمات الإلكترونية وضمان أمان بياناتك بفضل تقنيات الأمان المتقدمة التي نعتمدها في خدماتنا.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">قابلية التوسع</h5>
                        </div>
                        <p class="my-4 text-white">
                            تتميز خدمتنا بالمرونة العالية، حيث يمكنك زيادة موارد الاستضافة بسهولة لتلبية احتياجات موقعك المتزايدة مع نموه.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">استقرار وموثوقية</h5>
                        </div>
                        <p class="my-4 text-white">
                            نضمن لك استضافة مستقرة وموثوقة بدون انقطاعات، مع توفر دائم بنسبة 99.9% لضمان أن موقعك يعمل بشكل مستمر.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">دعم فني متواصل</h5>
                        </div>
                        <p class="my-4 text-white">
                            فريق الدعم الفني لدينا متواجد على مدار الساعة لمساعدتك في حل أي مشاكل تقنية تواجهك وضمان سير موقعك بسلاسة.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">توافق كامل مع الأنظمة المختلفة</h5>
                        </div>
                        <p class="my-4 text-white">
                            تتوافق خدمات الاستضافة السحابية لدينا مع مختلف أنظمة إدارة المحتوى ومنصات التجارة الإلكترونية، مما يوفر لك سهولة في الإدارة والتكامل.
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
                    <img src="{{ asset('assets/images/Call center-cuate.svg') }}" width="100%" alt="">
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