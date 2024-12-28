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
    <title>LODEN-ABOUT</title>
</head>

<body class="log-body">









{{-- 
    <section id="login">
        <!-- <div class="container"> -->
            <div class="p-1 p-md-4 rounded-2 shadow-sm register-container">
                <h2 class="text-center text-dark black my-4">Sine Up</h2>
                <div class="row m-0 justify-content-center align-items-center gap-md-4">
                    <div class="col-lg-5 col-md-6">
                        <form action="" class="p-5 rounded-2 w-100">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>


                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>

                            <button type="submit" class="bg-main rounded-2 py-1 py-md-2 text-white outline-0 black w-100 my-3">Sign Up</button>
                            <span class="text-secondary d-flex gap-2 align-items-center">Already have an account<a href="en-login.html" class="forgot-link">Log In</a></span>
                            

                        </form>
                    </div>
                    <div class="col-md-5">
                        <img src="../assets/images/Sign up-bro.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section> --}}















    <section id="login">
        <!-- <div class="container"> -->
        <div class="p-1 p-md-4 rounded-2 shadow-sm register-container">
            <h2 class="text-center text-dark black my-4">Sine Up</h2>
            <div class="row m-0 justify-content-center align-items-center gap-md-4">
                <div class="col-lg-5 col-md-6">

                    <form method="POST" action="{{ route('en.register') }}" class="p-5 rounded-2 w-100">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="email" aria-describedby="emailHelp">
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

                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <span class="text-secondary d-flex gap-2 align-items-center">Already have an account<a href="{{ route('en.login') }}" class="forgot-link">Log In</a></span>
                            <button type="submit" class="bg-main rounded-2 py-1 py-md-2 text-white outline-0 black w-100 my-3">Sign Up</button>
                        </div>
                    </form>


                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/Sign up-bro.svg') }}" alt="">
                </div>
            </div>

        </div>
        </div>
    </section>













     <!-- jquery -->
     <script src="../assets/js/jquery.js"></script>
     <!-- particles.js -->
     <script src="../assets/js/particles.min.js"></script>
     <!-- font awesome  -->
     <script src="../assets/js/all.min.js"></script>
     <!-- bootstrap  -->
     <script src="../assets/js/bootstrap.bundle.min.js"></script>
     <!-- animate  -->
     <script src="../assets/js/wow.min.js"></script>
     <script>
         new WOW().init();
     </script>
     <script src="../assets/js/custom.js"></script>
 </body>
 