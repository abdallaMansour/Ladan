<!-- navbar  -->
<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <a class="navbar-brand" href="{{ route('en.home') }}">
            <img src="{{ asset('assets/images/en-logo.png') }}" width="250px" alt="">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false">
            <i class="fa-solid fa-bars-staggered text-light fs-2"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2 gap-lg-4 me-3">
                <li class="nav-item">
                    <a class="nav-link active text-light fs-5" aria-current="page" href="{{ route('en.home') }}#header">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-left text-light fs-5" href="{{ route('en.home') }}#about">About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-left text-light fs-5" href="{{ route('en.home') }}#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-left text-light fs-5" href="{{ route('en.projects') }}">Projects</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link hvr-underline-from-left text-light fs-5" href="{{ route('en.home') }}#client">Clients</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link hvr-underline-from-left text-light fs-5" href="{{ route('en.home') }}#contact">Contact Us</a>
                </li>
                @auth
                    @if (Auth::user()->hasRole('admin'))
                        <li class="nav-item">
                            <a class="nav-link hvr-underline-from-right text-light fs-5" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item"><a href="{{ route('en.profile.edit') }}" class="nav-link hvr-underline-from-right text-light fs-5">Profile</a></li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-right text-light fs-5" href="{{ route('en.login') }}">Login</a>
                    </li>
                @endauth
            </ul>
            <a href="{{ route('home') }}" class="lang me-2 me-lg-5 btn btn-light">AR</a>
        </div>
    </div>
</nav>