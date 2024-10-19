@extends('ar.layout.app')

@section('content')
    <!-- start header & nav  -->
    <header id="header">
        <!-- animated background -->
        <div id="bg"></div>

        @include('ar.layout.header')

        <!-- header text  -->
        <div class="header-text text-center">
            <h1 class="text-light text-center mb-4  wow fadeIn" data-wow-delay=".2s">لدن العربية لتقنية المعلومات</h1>
            <p class="text-light text-center fs-2 h2 mb-lg-5 mb-3 wow fadeIn" data-wow-delay=".3s">
                شركة رائدة في مجال تقديم
                <span class="typed-text text-main"></span>
                <span class="cursor">&nbsp;</span>
            </p>
            <p class="text-center text-light fs-3 mb-4 wow fadeIn" data-wow-delay=".4s">نُشكل شريكًا موثوقًا يُلهم
                ثقتكم ويُكسب تقديركم
            </p>
            <a href="{{ route('about') }}" class="learn-more fs-5 wow fadeIn" data-wow-delay=".5s">اعرف المزيد</a>
        </div>

        <a href="#about" class="wow fadeIn" data-wow-delay=".6s">
            <div class="scroll-down"></div>
        </a>
    </header>
    <!-- end header & nav  -->

    <!-- start about sec -->
    <section id="about">
        <div class="container">
            <h3 class="title text-dark fs-3 wow fadeIn" data-wow-delay=".2s">من نحن؟</h3>
            <div class="row align-items-center">
                <img src="{{ asset('assets/images/Remote team-pana.svg') }}" class="col-12 col-lg-6 wow fadeInRight" data-wow-delay=".3s" width="90%" alt="">
                <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                    <p class="fs-4 lh-base">
                        باعتبارنا روادًا في عالم تقديم الحلول التكنولوجية المتكاملة، نحن ننطلق بشغف وتصميم لنكون الشركة
                        الرائدة
                        في
                        مجال تقنية المعلومات. نتميز برؤية واضحة وخبرة واسعة في مجالات متعددة، حيث نسعى دومًا لتقديم
                        الحلول
                        الفريدة
                        والمبتكرة التي تلبي احتياجات عملائنا الناشئين. تعكس خدماتنا الجديدة والمبهرة إصرارنا على تحقيق
                        التميز
                        والتفوق، مما يمنحنا الفرصة لبناء علاقات قوية ومستدامة مع عملائنا وتحقيق النجاح المشترك.
                    </p>

                    <a href="{{ route('about') }}" class="learn-more-page text-white fs-5">اعرف المزيد</a>
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
            <h3 class="title text-dark fs-3 wow fadeIn" data-wow-delay=".2s">خدماتنا</h3>
            <div>
                <div class="row justify-content-center gap-5 my-5">
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".2s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="{{ asset('assets/images/data-cloud-unscreen.gif') }}" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">استضافة سحابية</h5>
                        </div>
                        <p class="my-4 text-dark">
                            خدمة الاستضافة تعتبر الاساس لتوفير بيئة موثوقة ومتطورة لموقعك على الإنترنت، مع سرعة
                            واستقرار
                            وأمان شامل.
                        </p>
                        <a href="{{ route('host-details') }}" class="learn-more-page text-white fs-6">اعرف المزيد</a>

                    </div>
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".3s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="{{ asset('assets/images/15591404-unscreen.gif') }}" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">تصميم وبرمجة المواقع الإلكترونية</h5>
                        </div>
                        <p class="my-4 text-dark">
                            نقدم خدمات تصميم وبرمجة المواقع الإلكترونية لتحقيق تواجدك الرقمي بشكل احترافي وجذاب.
                        </p>
                        <a href="{{ route('web-details') }}" class="learn-more-page text-white fs-6">اعرف المزيد</a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".4s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="{{ asset('assets/images/smartphone-unscreen.gif') }}" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">برمجة تطبيقات الهاتف</h5>
                        </div>
                        <p class="my-4 text-dark">
                            نقدم خدمات برمجة تطبيقات الهاتف لتحويل أفكارك إلى تطبيقات مبتكرة ومتميزة على منصات متعددة.
                        </p>
                        <a href="{{ route('mobile-details') }}" class="learn-more-page text-white fs-6">اعرف المزيد</a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".5s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="{{ asset('assets/images/computer-unscreen.gif') }}" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">تصميم ui/ux</h5>
                        </div>
                        <p class="my-4 text-dark">
                            نقدم خدمات التصميم UI/UX لإنشاء تجارب مستخدم مبتكرة وملهمة تعزز تفاعل المستخدم مع منتجاتك
                            الرقمية.
                        </p>
                        <a href="{{ route('ux-ui-details') }}" class="learn-more-page text-white fs-6">اعرف المزيد</a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".6s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="{{ asset('assets/images/global-connection-unscreen.gif') }}" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">حلول الشبكات والامن السيبراني</h5>
                        </div>
                        <p class="my-4 text-dark">
                            نحن نوفر حلولًا متكاملة للشبكات والأمن السيبراني، حيث نقدم حماية قوية لضمان أمان بياناتك
                            واستقرار شبكتك.
                        </p>
                        <a href="{{ route('network-details') }}" class="learn-more-page text-white fs-6">اعرف المزيد</a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 service hvr-float-shadow wow fadeInUp" data-wow-delay=".7s">
                        <div class="d-flex align-items-end gap-3 title">
                            <img src="{{ asset('assets/images/edc-unscreen.gif') }}" width="70px" class="my-3" alt="">
                            <h5 class="text-dark fs-5 pb-4">خدمات البرامج الجاهزة ونقاط البيع</h5>
                        </div>
                        <p class="my-4 text-dark">
                            نقدم حلولًا برمجية جاهزة ونقاط بيع متكاملة لتلبية احتياجاتك في إدارة الأعمال والمبيعات
                            بكفاءة.
                        </p>
                        <a href="{{ route('pos-details') }}" class="learn-more-page text-white fs-6">اعرف المزيد</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end services sec  -->
    <!-- start clients section -->
    {{-- <section id="client">
        <div class="container">
            <h3 class="title text-dark fs-3 wow fadeIn" data-wow-delay=".2s">عملاؤنا</h3>
            <div class="row justify-content-center gap-3 mt-5 align-items-center m-0">
                <h4 class=" col-xl-6 col-lg-4  text-dark mt-3 ms-auto me-5 lh-lg d-flex gap-3 align-items-start wow slideInRight" data-wow-delay=".2s">
                    <i class="fa-solid fa-angles-left text-main mt-3"></i>
                    نفتخر بعملائنا الكرام، ونجاحهم هو دافعنا لتقديم أفضل الحلول التكنولوجية وتحقيق رؤيتهم المستقبلية
                    بنجاح.
                </h4>
                <div class="col-xl-3 col-lg-3 col-5 c-content d-flex justify-content-center align-items-center wow slideInLeft" data-wow-delay=".2s">
                    <img src="{{ asset('assets/images/loaded.png') }}" width="180px" alt="">
                </div>
                <div class="col-xl-3 col-lg-3 col-5 c-content d-flex justify-content-center align-items-center ms-5 wow slideInLeft" data-wow-delay=".3s">
                    <img src="{{ asset('assets/images/WhatsApp Image 2024-05-18 at 09.23.25.jpeg') }}" width="180px" alt="">
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end clients section -->

    <!-- start contact sec  -->
    <section id="contact" class="my-0">
        <div class="container">
            <h3 class="title text-dark fs-3 wow fadeIn" data-wow-delay=".2s">تواصل معنا</h3>
            <div class="row py-md-5 py-3 rounded-4 justify-content-center align-items-center">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/Call center-cuate.svg') }}" class="wow fadeIn" data-wow-delay=".3s" width="100%" alt="">
                </div>
                <form action="{{ route('message.create') }}" method="POST" class="col-lg-5">
                    @csrf
                    @method('PUT')
                    @if (Session::has('success'))
                        <span class="text-success mb-2">تم إرسال الرسالة بنجاح</span>
                    @elseif(Session::has('error'))
                        <span class="text-danger mb-2">حدث خطا في إرسال البيانات</span>
                        <span class="text-danger mb-2 d-block">{{ Session::get('error') }}</span>
                    @endif
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".3s">
                        <label class="form-label text-dark2" for="name">الاسم كامل</label>
                        <input value="{{ old('user_name') }}" name="user_name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                        @error('user_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".4s">
                        <label class="form-label text-dark2" for="email">البريد الالكتروني</label>
                        <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".5s">
                        <label class="form-label text-dark2" for="phone">رقم التواصل</label>
                        <input value="{{ old('phone') }}" name="phone" type="text" class="form-control" id="phone" aria-describedby="emailHelp">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 wow fadeInUp" data-wow-delay=".6s">
                        <label class="form-label text-dark2" for="service">اطلب خدمتك</label>
                        <textarea name="message" class="form-control" id="service">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="bg-main w-100 text-center text-white border-0 outline-0 py-2 rounded-2 wow fadeInUp" data-wow-delay=".7s">ارسال</button>
                </form>
            </div>
        </div>
    </section>
    <!-- end contact sec  -->
@endsection
