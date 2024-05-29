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
                <img src="../assets/images/computer-unscreen.gif" width="100px" class="my-3" alt="">
                <h5 class="text-dark fs-3 pb-4">تصميم ui/ux</h5>
            </div>

            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".2s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    في لدن التقنية، نقدم لك خدمة تصميم UI/UX التي تتميز بالاحترافية العالية والجودة الفائقة.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".25s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    نحن نضمن لك تصميماً يجذب المستخدمين ويبقيهم متفاعلين مع منتجك بفضل تجربة مستخدم سلسة وبديهية.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".3s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    تصميماتنا تركز على خلق تجربة مريحة وجذابة، حيث يتم وضع احتياجات المستخدم في صميم عملية التصميم.
                    وجذابة للمستخدمين.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".35s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    نحن نعمل على توفير تصميمات تتوافق مع هوية علامتك التجارية، مما يعزز من تميزك في السوق ويزيد من ولاء
                    العملاء.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".4s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    نولي اهتمامًا كبيرًا بأدق التفاصيل لضمان أن كل عنصر في التصميم يخدم الغرض ويعزز تجربة المستخدم.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".45s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    نقدم خدماتنا من خلال فريق من المصممين الخبراء الذين يمتلكون المهارة والخبرة اللازمة لتحقيق أفضل
                    النتائج.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".5s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    حصولك على تصميم UI/UX مع لدن العربية يعني أنك تستثمر في تجربة مستخدم متميزة، مما يزيد من رضا
                    المستخدمين ويساهم في تحقيق نجاح مشروعك.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".55s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    نحن نقدم دعمًا فنيًا متميزًا لضمان أن تظل تصميماتك حديثة ومواكبة للتطورات والتغيرات في احتياجات
                    المستخدمين.
                </span>
            </p>
            <p class="text-dark2 d-flex gap-2 align-items-start fs-5 wow fadeInUp" data-wow-delay=".6s">
                <i class="fa-regular fa-circle-check mt-2 text-main fs-5"></i>
                <span>
                    اطلب الآن خدمة تصميم UI/UX من العربية، وابدأ معنا رحلة نجاح لا تنتهي.
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
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center  wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content ">
                        <div class="d-flex align-items-end justify-content-center  gap-3 title">
                            <h5 class="text-white fs-5 py-3 ">تجربة مستخدم محسنة</h5>
                        </div>
                        <p class="my-4 text-white">
                            تصميماتنا تركز على تحسين تجربة المستخدم، مما يزيد من تفاعل العملاء ورضاهم.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center  wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">واجهة مستخدم جذابة</h5>
                        </div>
                        <p class="my-4 text-white">
                            نقدم تصميمات واجهة مستخدم جذابة وبديهية تسهل على المستخدمين التفاعل مع المنتج.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center  wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">توافق مع هوية العلامة التجارية</h5>
                        </div>
                        <p class="my-4 text-white">
                            تصميماتنا تتوافق مع هوية علامتك التجارية، مما يعزز من تميزك ويزيد من ولاء العملاء.
                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center  wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">تحسين أداء المنتج</h5>
                        </div>
                        <p class="my-4 text-white">
                            تصميمات UI/UX لدينا تساعد في تحسين أداء المنتج وتسهيل استخدامه.

                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">تصميمات متجاوبة</h5>
                        </div>
                        <p class="my-4 text-white">
                            نضمن أن تكون تصميماتنا متجاوبة وتعمل بكفاءة على جميع الأجهزة والشاشات.

                        </p>
                    </div>
                </div>
                <!-- glowing hover  -->
                <div class="col-12 col-md-5 col-lg-3 ser-card bg-dark text-center wow fadeInUp" data-wow-delay=".2s" style="--clr:#F37121d7">
                    <div class="card-content">
                        <div class="d-flex align-items-end gap-3 title justify-content-center">
                            <h5 class="text-white fs-5 py-3">دعم فني مستمر</h5>
                        </div>
                        <p class="my-4 text-white">
                            نقدم دعمًا فنيًا مستمرًا لضمان تحديث وتحسين التصميمات بشكل دوري وفقًا لاحتياجات المستخدمين
                            والتطورات التقنية.
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
