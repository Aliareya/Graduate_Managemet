<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به سیستم مدیریت فارغان</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
            background-image: url('{{ asset('images/herat.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.25);
        }
    </style>
</head>

<body class="min-h-screen">

    <div class="overlay min-h-screen flex items-center justify-center p-6">

        <div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl shadow-2xl p-8">

            <!-- Title -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-white">
                    سیستم مدیریت فارغان
                </h1>

                <p class="!text-white mt-2">
                    لطفاً وارد حساب کاربری خود شوید
                </p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 p-3 rounded-xl bg-green-500/20 text-green-100 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-white mb-2">
                        ایمیل
                    </label>

                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        autocomplete="username" placeholder="you@example.com"
                        class="w-full bg-white/10 border border-white/20 rounded-xl py-3 px-4 text-white placeholder-gray-300 focus:ring-2 focus:ring-white/50 focus:border-white/50 outline-none text-left">

                    @error('email')
                        <p class="text-red-300 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-9">
                    <div class="flex justify-between items-center mb-2">
                        <label class="text-sm font-medium text-white">
                            رمز عبور
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-blue-200 hover:text-white">
                                فراموشی رمز عبور؟
                            </a>
                        @endif
                    </div>

                    <input type="password" name="password" required autocomplete="current-password"
                        placeholder="••••••••"
                        class="w-full bg-white/10 border border-white/20 rounded-xl py-3 px-4 text-white placeholder-gray-300 focus:ring-2 focus:ring-white/50 focus:border-white/50 outline-none text-left">

                    @error('password')
                        <p class="text-red-300 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="rounded border-white/30 bg-white/10">

                    <label for="remember_me" class="mr-2 text-sm text-white">
                        مرا به خاطر بسپار
                    </label>
                </div> --}}

                <!-- Login Button -->
                <button type="submit"
                    class="w-full bg-[#34a898] hover:bg-[#2d9587] text-white py-3 rounded-xl font-semibold transition duration-300 shadow-lg">
                    ورود به سیستم
                </button>
            </form>
            <div class="text-center mt-4">
                <span class="text-gray-200">
                    حساب کاربری ندارید؟ 
                </span>

                <a href="{{ route('register') }}" class="text-[#7fffd4] hover:text-white font-medium">
                    ثبت نام
                </a>
            </div>
        </div>

    </div>

</body>

</html>
