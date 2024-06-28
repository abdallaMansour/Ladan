<x-guest-layout>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap');
        * {
            font-family: Cairo;
        }
    </style>
    <div class="text" style="direction: rtl">
        شكرا لتسجيلك! قبل البدء، هل يمكنك التحقق من عنوان بريدك الإلكتروني عن طريق النقر على الرابط الذي أرسلناه إليك للتو عبر البريد الإلكتروني؟ إذا لم تتلق رسالة البريد الإلكتروني، فسنرسل لك بكل سرور رسالة أخرى.
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="text success"  style="direction: rtl">
            تم إرسال رابط تحقق جديد إلى عنوان البريد الإلكتروني الذي قدمته أثناء التسجيل.
        </div>
    @endif

    <div class="btns ar">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button type="submit" class="btn">إعادة ارسال بريد التحقق</button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="link">
                تسجيل الخروج
            </button>
        </form>
    </div>
</x-guest-layout>
