<!-- start footer  -->
<footer class="bg-dark pt-5">
    <div class="container">
        <h2 class="text-white text-center wow fadeInDown" data-wow-delay=".2s"><span class="text-main">Ledn </span>
            Arabia for Information Technology</h2>
        <p class="text-white fs-5 text-center my-3 wow fadeInDown" data-wow-delay=".3s">
            Your trusted partner in the world of information technology
        </p>
        <p class="text-light text-center w-50 mx-auto second-footer wow fadeInDown" data-wow-delay=".4s">
            Together towards a flourishing future of technology and innovation, we are committed to delivering the
            highest standards of quality and ensuring the satisfaction of our clients at every step. Our vision
            revolves around continuous innovation and striving for excellence, helping us build a brighter and more
            prosperous future for all
        </p>
        <div class="footer-links d-flex gap-3 justify-content-center my-3 my-lg-5">
            <a href="{{ $instagram }}" class="wow fadeInUp" data-wow-delay=".2s">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="{{ $tiktok }}" class="wow fadeInUp" data-wow-delay=".3s">
                <i class="fa-brands fa-tiktok"></i>
            </a>
            <a href="{{ $twitter }}" class="wow fadeInUp" data-wow-delay=".4s">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="{{ $whatsapp }}" class="wow fadeInUp" data-wow-delay=".5s">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </div>
    <div class="py-3 mt-2 wow fadeIn" data-wow-delay=".2s" style="background-color: #181d22;">
        <p class="text-white text-center px-2 m-0">&copy; 2024 All rights reserved. Ledn Arabia for Information Technology Company.

        </p>
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
<!-- typedjs -->
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
</body>

</html>
