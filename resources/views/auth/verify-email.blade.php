<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تایید ایمیل - سیستم مدیریت فارغان</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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

            <!-- Information Side -->
            <div
                class="hidden lg:flex flex-col justify-center bg-gradient-to-br from-[#34a898]/90 to-[#1f6f63]/90 p-8">

                <div class="max-w-md">

                    <div class="flex flex-col items-center">

                        <div
                            class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-envelope-circle-check text-white text-4xl"></i>
                        </div>

                        <h1 class="text-2xl text-center font-bold text-white leading-tight">
                            تایید آدرس ایمیل
                        </h1>

                        <p class="mt-5 text-center text-white/90 leading-8">
                            برای فعال‌سازی کامل حساب کاربری، لطفاً ایمیل خود را
                            تایید نمایید. لینک تایید به آدرس ایمیل شما ارسال شده است.
                        </p>

                    </div>

                    <div class="mt-8 space-y-4">

                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-envelope text-white"></i>
                            </div>

                            <div>
                                <h3 class="text-white font-semibold">
                                    تایید ایمیل
                                </h3>
                                <p class="text-white/70 text-sm">
                                    فعال‌سازی حساب از طریق ایمیل
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-user-shield text-white"></i>
                            </div>

                            <div>
                                <h3 class="text-white font-semibold">
                                    امنیت بیشتر
                                </h3>
                                <p class="text-white/70 text-sm">
                                    محافظت از حساب کاربری
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-check-circle text-white"></i>
                            </div>

                            <div>
                                <h3 class="text-white font-semibold">
                                    دسترسی کامل
                                </h3>
                                <p class="text-white/70 text-sm">
                                    استفاده از تمامی امکانات سیستم
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Form Side -->
            <div
                class="bg-white/10 backdrop-blur-xl px-7 flex flex-col justify-center">

                <div class="text-center mb-6">
                    <h2 class="text-3xl font-bold text-white">
                        تایید ایمیل
                    </h2>
                </div>

                <div class="mb-6 text-sm text-gray-200 leading-8 text-center">
                    از ثبت‌نام شما سپاسگزاریم. قبل از شروع، لطفاً با کلیک روی لینکی
                    که به ایمیل شما ارسال شده است، آدرس ایمیل خود را تایید نمایید.
                    اگر ایمیلی دریافت نکرده‌اید، می‌توانید درخواست ارسال مجدد بدهید.
                </div>

                @if (session('status') == 'verification-link-sent')
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
                        ">
                        <i class="fas fa-circle-check"></i>

                        <span>
                            لینک جدید تایید ایمیل برای شما ارسال شد.
                        </span>
                    </div>
                @endif

                <div class="space-y-4">

                    <!-- Resend Email -->
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <button
                            type="submit"
                            class="w-full bg-[#34a898] hover:bg-[#2c8c7d] text-white py-3 rounded-xl font-semibold transition-all duration-300">
                            ارسال مجدد لینک تایید
                        </button>
                    </form>

                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button
                            type="submit"
                            class="w-full bg-white/10 border border-white/20 hover:bg-white/20 text-white py-3 rounded-xl font-semibold transition-all duration-300">
                            خروج از حساب کاربری
                        </button>
                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
