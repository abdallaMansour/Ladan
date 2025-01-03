<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- font awesome  -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- animate  -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- hover.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/hover-min.css') }}">
    <!-- my style  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>LODEN-ABOUT</title>
</head>

<body class="update-body">

    <!-- links  -->
    <section class="back-links d-flex gap-3 justify-content-end w-100 mb-0">
        <a href="{{ route('home') }}" class="back rounded-2">الرجوع الى الرئيسية</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="logout rounded-2">تسجيل الخروج</button>
        </form>
    </section>

    <section class="update-sec rounded-2">
        <div class="py-3 px-2 p-md-5 shadow-sm ">
            <h4 class="text-dark title">البيانات الشخصية</h4>
            <p class="text-dark ">تحديث بيانات الملف الشخصي</p>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')

                <div class="mb-3">
                    <label for="name" class="form-label text-dark">الاسم</label>
                    <input name="name" type="text" class="form-control" id="name" value="{{ old('name') ?? $user->name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label  text-dark">البريد الالكتروني</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                        value="{{ old('email') ?? $user->email }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="d-flex items-center gap-4" style="align-items: baseline">
                    <button type="submit" class="learn-more-page border-0 outline-0 text-white rounded-2">حفظ</button>

                    @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-success">تم الحفظ</p>
                    @endif
                </div>

            </form>

        </div>
    </section>

    <section class="update-sec rounded-2">
        <div class="py-3 px-2 p-md-5 shadow-sm ">
            <h4 class="text-dark title">كلمة المرور</h4>
            <p class="text-dark ">تحديث كلمة المرور الخاصة بك</p>

            <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="old_password" class="form-label text-dark">كلمة المرور القديمة</label>
                    <input name="current_password" type="password" class="form-control" id="old_password">
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-danger" />

                </div>

                <div class="mb-3">
                    <label for="update_password_password" class="form-label text-dark">كلمة المرور الجديدة</label>
                    <input name="password" type="password" class="form-control" id="update_password_password">
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-danger" />
                </div>

                <div class="mb-3">
                    <label for="update_password_password_confirmation" class="form-label text-dark">تأكيد كلمة المرور</label>
                    <input name="password_confirmation" type="password" class="form-control" id="update_password_password_confirmation" autocomplete="new-password" />
                </div>

                <div class="d-flex items-center gap-4" style="align-items: baseline">
                    <button type="submit" class="learn-more-page border-0 outline-0 text-white rounded-2">حفظ</button>

                    @if (session('status') === 'password-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-success">{{ __('Saved.') }}</p>
                    @endif
                </div>

            </form>

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
    <script src="../{{ asset('assets/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>