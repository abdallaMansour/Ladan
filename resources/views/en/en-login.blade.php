<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- font awesome  -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- animate  -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- hover.css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/hover-min.css') }}">
    <!-- my style  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>LADAN-ABOUT</title>
</head>

<body class="log-body">
    <section id="login">
        <!-- <div class="container"> -->
        <div class="p-1 p-md-4 rounded-2 shadow-sm register-container">
            <h2 class="text-center text-dark black my-4">Log In</h2>
            <div class="row m-0 justify-content-center align-items-center gap-md-4">
                <div class="col-lg-5 col-md-6">


                    <form method="POST" action="{{ route('login') }}" class="p-5 rounded-2 w-100">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="bg-main rounded-2 py-1 py-md-2 text-white outline-0 black w-100 my-3">Log In</button>

                        <a href="{{ route('en.password.reset', 'token_here') }}" class="forgot-link">Forgot password</a>
                        <hr class="bg-secondary">
                        <a href="{{ route('en.register') }}" class="forgot-link text-center mx-auto d-block">Don’t have an account?</a>
                    </form>


                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/Mobile login-amico.svg') }}" class="login-img" alt="">
                </div>
            </div>

        </div>
        </div>
    </section>







    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!-- particles.js -->
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <!-- font awesome  -->
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <!-- bootstrap  -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- animate  -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
