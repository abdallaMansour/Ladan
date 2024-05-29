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
            <h1 class="text-light text-center mb-4 wow fadeIn" data-wow-delay=".2s" style="margin-top: 5vh;">من نحن</h1>
            <p class="text-light text-center fs-4 h2 mb-lg-5 mb-3 wow fadeIn" data-wow-delay=".3s">
                تعرف على جميع الخدمات التي تقدمها شركة لدن العربية لضمان نجاحك الرقمي
            </p>
        </div>

    </header>
    <!-- end header & nav  -->
    <!-- start about sec  -->
    <section>
        <div class="container">
            <!-- about title  -->
            <div class="title d-flex gap-3 align-items-center wow fadeIn" data-wow-delay=".2s">
                <i class="fa-solid fa-angles-left text-main"></i>
                <h3 class=" text-dark fs-3">تعرف على جميع خدماتنا التى نقدمها إليك</h3>
            </div>
            <div class="row align-items-center about">
                <img src="../assets/images/Startup life-pana.svg" class="col-12 col-lg-6 wow fadeInRight" data-wow-delay=".3s" alt="">
                <div class="about-text col-12 col-lg-6">
                    <p class="text-dark2 fs-5 wow fadeInUp" data-wow-delay=".3s">
                        نحن في شركة لدن العربية لتقنية المعلومات، نسعى نحو الابتكار والتطور في الحلول التكنولوجية
                        المتكاملة. نهدف إلى الريادة في مجال تقنية المعلومات بشغف وتصميم، وملتزمون برؤية ملهمة تدفعنا
                        للتميز.
                    </p>
                    <p class="text-dark2 fs-5 wow fadeInUp" data-wow-delay=".4s">
                        بفضل خبرتنا الواسعة، نقدم حلولًا مبتكرة تتجاوز توقعات عملائنا. تراكمت خبراتنا عبر السنوات، مما
                        يمكننا من فهم التحديات وتلبية احتياجاتك بكفاءة.
                    </p>
                    <p class="text-dark2 fs-5 wow fadeInUp" data-wow-delay=".5s">
                        نحن ملتزمون بتقديم حلول تكنولوجية تلهم وتبتكر، مصممة خصيصًا لتلبية احتياجات عملائنا. نؤمن بأن
                        النجاح يُبنى على التعاون والعلاقات القوية، ونعمل على بناء شراكات طويلة الأمد مبنية على الثقة.
                    </p>
                    <p class="text-dark2 fs-5 wow fadeInUp" data-wow-delay=".6s">
                        خدماتنا بوابة لتحقيق أحلامك، نقدم تقنيات متطورة وبنية تحتية قوية لضمان سرعة الأداء واستقرار
                        النظام وأمان البيانات. نسعى لجعل كل تحدٍ فرصة للتألق والتميز.
                    </p>
                    <p class="text-dark2 fs-5 wow fadeInUp" data-wow-delay=".7s">
                        فريقنا من الخبراء هو جوهر قوتنا، يعمل بجد لضمان تقديم أفضل الحلول والخدمات. نحن هنا لنكون شركاءك
                        في النجاح، ونسعى دائمًا لتقديم الأفضل لك، محققين رؤيتك وتحويلها إلى واقع ملموس.
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
                        <h3 class="text-dark2">رؤيتنا</h3>
                        <p class="fs-5 text-dark mt-3 mb-4">
                            بتميز وإبداع، نسعى لتقديم حلول تقنية المعلومات
                            المُتكاملة التي تُلبي احتياجات عملائنا وتُساهم
                            في تحقيق أهدافهم، ونُشكل شريكًا موثوقًا يُلهم
                            ثقتهم ويُكسب تقديرهم.

                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-5 message-card wow fadeInUp" data-wow-delay=".5s">
                    <div class="img">
                        <img src="../assets/images/paper-plane.gif" alt="">
                        <h3 class="text-dark2">رسالتنا</h3>
                        <p class="fs-5 text-dark mt-3 mb-4">
                            أن نكون الشركة الرائدة في مجال تقديم حلول
                            تقنية المعلومات في المنطقة، ونُعرف بتميزنا
                            في تقديم خدمات عالية الجودة، وابتكارنا المستمر،
                            والتزامنا بتلبية احتياجات عملائنا.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end message sec  -->
@endsection
