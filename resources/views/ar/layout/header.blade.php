<!-- navbar  -->
<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo.png') }}" width="250px" alt="">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false">
            <i class="fa-solid fa-bars-staggered text-light fs-2"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2 gap-lg-4 me-2">
                <li class="nav-item">
                    <a class="nav-link active text-light fs-5" aria-current="page" href="{{ route('home') }}#header">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-right text-light fs-5" href="{{ route('home') }}#about">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-right text-light fs-5" href="{{ route('home') }}#services">خدامتنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-right text-light fs-5" href="{{ route('projects') }}#projects">مشاريعنا</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link hvr-underline-from-right text-light fs-5" href="{{ route('home') }}#client">عملاؤنا</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-right text-light fs-5" href="{{ route('home') }}#contact">اتصل بنا</a>
                </li>
                @auth
                    @if (Auth::user()->type == 'admin')
                        <li class="nav-item">
                            <a class="nav-link hvr-underline-from-right text-light fs-5" href="{{ route('dashboard') }}">لوحه التحكم</a>
                        </li>
                    @else
                        <li class="nav-item"><a href="{{ route('profile.edit') }}" class="nav-link hvr-underline-from-right text-light fs-5">الملف الشخصي</a></li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-right text-light fs-5" href="{{ route('login') }}">تسجيل الدخول</a>
                    </li>
                @endauth
            </ul>
            <a href="{{ route('en.home') }}" class="lang me-2 me-lg-5 btn btn-light">EN</a>
        </div>
    </div>
</nav>
