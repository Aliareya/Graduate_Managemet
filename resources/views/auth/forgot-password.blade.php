<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بازیابی رمز عبور - سیستم مدیریت فارغان</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Vazirmatn', sans-serif;
            background-image: url('{{ asset('images/herat.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            overflow: hidden;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.45);
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body>

    <div class="overlay flex items-center justify-center p-4">

        <div
            class="w-full max-w-4xl h-[90vh] grid lg:grid-cols-2 rounded-3xl overflow-hidden border border-white/20 shadow-2xl">

            <!-- Left Side -->
            <div class="hidden lg:flex flex-col justify-center bg-gradient-to-br from-[#34a898]/90 to-[#1f6f63]/90 p-8">

                <div class="max-w-md">

                    <div class="flex flex-col items-center">

                        <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-envelope-open-text text-white text-4xl"></i>
                        </div>

                        <h1 class="text-2xl text-center font-bold text-white">
                            بازیابی رمز عبور
                        </h1>

                        <p class="mt-5 text-center text-white/90 leading-8">
                            ایمیل حساب کاربری خود را وارد نمایید.
                            لینک بازیابی رمز عبور برای شما ارسال خواهد شد تا
                            بتوانید رمز جدیدی تنظیم کنید.
                        </p>

                    </div>

                    <div class="mt-8 space-y-4">

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-envelope text-white"></i>
                            </div>

                            <div>
                                <h3 class="text-white font-semibold">
                                    ارسال لینک بازیابی
                                </h3>
                                <p class="text-white/70 text-sm">
                                    دریافت لینک از طریق ایمیل
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-lock text-white"></i>
                            </div>

                            <div>
                                <h3 class="text-white font-semibold">
                                    امنیت حساب
                                </h3>
                                <p class="text-white/70 text-sm">
                                    محافظت از اطلاعات شخصی
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-user-shield text-white"></i>
                            </div>

                            <div>
                                <h3 class="text-white font-semibold">
                                    دسترسی مطمئن
                                </h3>
                                <p class="text-white/70 text-sm">
                                    بازگشت امن به حساب کاربری
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Form Side -->
            <div class="bg-white/10 backdrop-blur-xl px-7 flex flex-col justify-center">

                <div class="text-center mb-6">
                    <h2 class="text-3xl font-bold text-white">
                        فراموشی رمز عبور
                    </h2>
                </div>

                @if (session('status'))
                    <div
                        style="
            background-color:#16a34a;
            color:#ffffff;
            border:1px solid #22c55e;
            border-radius:12px;
            padding:14px 16px;
            margin-bottom:16px;
            display:flex;
            align-items:center;
            gap:10px;
            box-shadow:0 10px 25px rgba(0,0,0,.15);
        ">
                        <i class="fas fa-circle-check"></i>

                        <span style="color:#ffffff;">
                            {{ session('status') }}
                        </span>
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" class="space-y-4">

                    @csrf

                    <!-- Email -->
                    <div>
                        <label class="block text-sm text-white mb-1">
                            ایمیل
                        </label>

                        <div class="relative">
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                autofocus placeholder="example@gmail.com"
                                class="w-full bg-white/10 border border-white/20 rounded-xl py-2.5 pr-11 px-4 text-white placeholder-gray-300 focus:ring-2 focus:ring-[#34a898] outline-none">

                            <i class="fas fa-envelope absolute right-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                        </div>

                        @error('email')
                            <p class="text-red-300 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Button -->
                    <button type="submit"
                        class="w-full bg-[#34a898] mt-5 hover:bg-[#2c8c7d] text-white py-3 rounded-xl font-semibold transition-all duration-300">
                        ارسال لینک بازیابی
                    </button>

                    <!-- Back Login -->
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="text-[#7fffd4] hover:text-white font-medium">
                            بازگشت به صفحه ورود
                        </a>
                    </div>

                </form>

            </div>

        </div>

    </div>

</body>

</html>
```
