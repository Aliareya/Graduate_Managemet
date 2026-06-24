<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام - سیستم مدیریت فارغان</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Vazirmatn', sans-serif;
            background-image: url('http://127.0.0.1:8000/images/herat.jpg');
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
            <div class="hidden lg:flex flex-col justify-center bg-gradient-to-br from-[#34a898]/90 to-[#1f6f63]/90 p-8">

                <div class="max-w-md  ">
                    <div class="flex flex-col items-center">
                        <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fas fa-user-graduate text-white text-4xl"></i>
                        </div>

                        <h1 class="text-2xl text-center  font-bold text-white leading-tight">
                            سیستم مدیریت فارغان
                        </h1>

                        <p class="mt-5 text-center text-white/90 leading-8">
                            به سیستم مدیریت فارغان دانشگاه هرات خوش آمدید.
                            این سیستم جهت ثبت، مدیریت و پیگیری اطلاعات فارغان
                            طراحی و توسعه داده شده است.
                        </p>

                    </div>



                    <div class="mt-8 space-y-4">

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-users text-white"></i>
                            </div>

                            <div>
                                <h3 class="text-white font-semibold">
                                    مدیریت کاربران
                                </h3>
                                <p class="text-white/70 text-sm">
                                    ثبت و مدیریت کاربران سیستم
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>

                            <div>
                                <h3 class="text-white font-semibold">
                                    مدیریت اسناد
                                </h3>
                                <p class="text-white/70 text-sm">
                                    نگهداری و بررسی مدارک فارغان
                                </p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center">
                                <i class="fas fa-chart-line text-white"></i>
                            </div>

                            <div>
                                <h3 class="text-white font-semibold">
                                    گزارش گیری پیشرفته
                                </h3>
                                <p class="text-white/70 text-sm">
                                    گزارش‌های تحلیلی و آماری
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Register Form -->
            <div class="bg-white/10 backdrop-blur-xl px-7 flex flex-col justify-center">

                <div class="text-center">
                    <h2 class="text-3xl py-3 font-bold text-white">
                        ایجاد حساب کاربری
                    </h2>
                </div>


                <form method="POST" action="{{ route('register') }}" class="space-y-3">
                    @csrf

                    <!-- Full Name -->
                    <div>
                        <label class="block text-sm text-white mb-1">
                            نام کامل
                        </label>

                        <div class="relative">
                            <input type="text" name="name" value="{{ old('name') }}" required autofocus
                                autocomplete="name" placeholder="نام و نام خانوادگی"
                                class="w-full bg-white/10 border border-white/20 rounded-xl py-2.5 pr-11 px-4 text-white placeholder-gray-300 focus:ring-2 focus:ring-[#34a898] outline-none">

                            <i class="fas fa-user absolute right-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                        </div>

                        @error('name')
                            <p class="text-red-300 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm text-white mb-1">
                            ایمیل
                        </label>

                        <div class="relative">
                            <input type="email" name="email" value="{{ old('email') }}" required
                                autocomplete="username" placeholder="example@gmail.com"
                                class="w-full bg-white/10 border border-white/20 rounded-xl py-2.5 pr-11 px-4 text-white placeholder-gray-300 focus:ring-2 focus:ring-[#34a898] outline-none">

                            <i class="fas fa-envelope absolute right-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                        </div>

                        @error('email')
                            <p class="text-red-300 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm text-white mb-1">
                            رمز عبور
                        </label>

                        <div class="relative">
                            <input type="password" name="password" required autocomplete="new-password"
                                placeholder="********"
                                class="w-full bg-white/10 border border-white/20 rounded-xl py-2.5 pr-11 px-4 text-white placeholder-gray-300 focus:ring-2 focus:ring-[#34a898] outline-none">

                            <i class="fas fa-lock absolute right-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                        </div>

                        @error('password')
                            <p class="text-red-300 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label class="block text-sm text-white mb-1">
                            تکرار رمز عبور
                        </label>

                        <div class="relative">
                            <input type="password" name="password_confirmation" required autocomplete="new-password"
                                placeholder="********"
                                class="w-full bg-white/10 border border-white/20 rounded-xl py-2.5 pr-11 px-4 text-white placeholder-gray-300 focus:ring-2 focus:ring-[#34a898] outline-none">

                            <i class="fas fa-shield-alt absolute right-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                        </div>
                    </div>

                    <!-- Button -->
                    <button type="submit"
                        class="w-full bg-[#34a898] mt-5 hover:bg-[#2c8c7d] text-white py-3 rounded-xl font-semibold transition-all duration-300">
                        ایجاد حساب کاربری
                    </button>

                    <!-- Login Link -->
                    <div class="text-center">
                        <span class="text-gray-200">
                            قبلاً حساب دارید؟
                        </span>

                        <a href="{{ route('login') }}" class="text-[#7fffd4] hover:text-white font-medium">
                            ورود به سیستم
                        </a>
                    </div>
                </form>
                ```


            </div>

        </div>

    </div>

</body>

</html>
```
