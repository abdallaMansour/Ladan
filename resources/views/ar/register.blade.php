<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- font awesome  -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- animate  -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- hover.css  -->
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <!-- my style  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>LODEN-ABOUT</title>
</head>

<body class="log-body">


    <section id="login">
        <!-- <div class="container"> -->
        <div class="p-1 p-md-4 rounded-2 shadow-sm register-container">
            <h2 class="text-center text-dark black my-4">إنشاء حساب جديد</h2>
            <div class="row m-0 justify-content-center align-items-center gap-md-4">
                <div class="col-lg-5 col-md-6">


                    <form method="POST" action="{{ route('register') }}" class="p-5 rounded-2 w-100">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">اسم المستخدم</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الالكتروني</label>
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password -->


                        <div class="mb-4">
                            <label for="password" class="form-label">كلمة المرور</label>
                            <input type="password" name="password" class="form-control" id="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">كلمة المرور</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <span class="text-secondary d-flex gap-2 align-items-center">هل تمتلك حساب؟<a href="{{ route('login') }}" class="forgot-link">تسجيل الدخول</a></span>
                            <button type="submit" class="bg-main rounded-2 py-1 py-md-2 text-white outline-0 black w-100 my-3">انشاء</button>
                        </div>
                    </form>


                </div>
                <div class="col-md-5">
                    <img src="assets/images/Sign up-bro.svg" alt="">
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- particles.js -->
    <script src="assets/js/particles.min.js"></script>
    <!-- font awesome  -->
    <script src="assets/js/all.min.js"></script>
    <!-- bootstrap  -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- animate  -->
    <script src="../assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
