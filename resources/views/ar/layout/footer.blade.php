@php
    $setting = \App\Models\Setting::first();
@endphp

    <!-- start footer  -->
    <footer class="bg-dark pt-5">
        <div class="container">
            <h2 class="text-white text-center wow fadeInDown" data-wow-delay=".2s"><span class="text-main">لدن </span> العربية لتقنية المعلومات</h2>
            <p class="text-white fs-5 text-center my-3 wow fadeInDown" data-wow-delay=".3s">شريكك الموثوق في عالم تقنية المعلومات</p>
            <p class="text-light text-center w-50 mx-auto second-footer wow fadeInDown" data-wow-delay=".4s">
                معاً نحو مستقبل مزدهر بالتكنولوجيا والإبداع، نلتزم بتقديم أعلى معايير الجودة وضمان رضا عملائنا في كل
                خطوة. رؤيتنا تتمحور حول الابتكار المستمر والسعي لتحقيق التفوق، مما يساعدنا في بناء مستقبل أكثر إشراقًا
                وازدهارًا للجميع
            </p>
            <div class="footer-links d-flex gap-3 justify-content-center my-3 my-lg-5">
                <a href="{{ $setting->instagram }}" class="wow fadeInUp" data-wow-delay=".2s">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="{{ $setting->tiktok }}" class="wow fadeInUp" data-wow-delay=".3s">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href="{{ $setting->x }}" class="wow fadeInUp" data-wow-delay=".4s">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="{{ $setting->whatsapp }}" class="wow fadeInUp" data-wow-delay=".5s">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
        </div>
        <div class="py-3 mt-2 wow fadeIn" data-wow-delay=".2s" style="background-color: #181d22;">
            <p class="text-white text-center px-2 m-0">&copy; 2024 جميع الحقوق محفوظة. شركة لدن العربية لتقنية
                المعلومات.</p>
        </div>
    </footer>
    <!-- end footer  -->


    <!-- sticky WhatsApp -->
    <div class="whatsapp-btn-container">
        <a class="whatsapp-btn" href="https://wa.me/966570803605" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <span>Contact Us</span>
    </div>

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!-- particles.js -->
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <!-- font awesome  -->
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <!-- bootstrap  -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- swiper js  -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- animate  -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

        {{-- Toastr here! --}}
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000"
        }
    </script>

    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @elseif (session('error'))
            toastr.error("{{ session('error') }}");
        @elseif (session('info'))
            toastr.info("{{ session('info') }}");
        @elseif (session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>

</html>