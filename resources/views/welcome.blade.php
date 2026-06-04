<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herat City - Background</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
            background-image: url('http://127.0.0.1:8000/images/herat.jpg');
            background-size: cover;
            background-position:bottom;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        
        .overlay {
            background-color: rgba(0, 0, 0, 0);
        }
    </style>
</head>
<body class="min-h-screen">

    <!-- Overlay to make text readable -->
    <div class="overlay min-h-screen flex items-center justify-center p-8">
        


<div class="w-full max-w-md
            bg-white/10
            backdrop-blur-xl
            border border-white/20
            rounded-3xl
            shadow-2xl
            p-8">

    <!-- Logo / Title -->
    <div class="text-center mb-6">
        <h2 class="text-3xl font-bold text-white">ورود به سیستم</h2>
    </div>

    <!-- Form -->
    <form class="space-y-5">

        <!-- Email -->
        <div>
            <label class="block text-sm font-medium text-white mb-2">
                ایمیل
            </label>

            <div class="relative">
                <input type="email"
                    placeholder="you@example.com"
                    class="w-full bg-white/10 border placeholder:left-6 border-white/20 rounded-xl py-3 px-4 text-white placeholder-gray-300 focus:ring-2 focus:ring-white/50 focus:border-white/50 outline-none transition text-left dir-ltr">

                <i class="fas fa-envelope absolute  right-4 top-6 -translate-y-1/2 text-gray-300"></i>
            </div>
        </div>

        <!-- Password -->
        <div>
            <div class="flex justify-between items-center mb-2">
                <label class="text-sm font-medium text-white">
                    رمز عبور
                </label>

                <a href="#"
                    class="text-sm text-blue-200 hover:text-white transition">
                    فراموشی رمز عبور
                </a>
            </div>

            <div class="relative">
                <input type="password"
                    placeholder="••••••••"
                    class="w-full bg-white/10 border border-white/20 rounded-xl py-3 px-4 text-white placeholder-gray-300 focus:ring-2 focus:ring-white/50 focus:border-white/50 outline-none transition text-left dir-ltr">

                <i class="fas fa-lock absolute  right-4 top-6 -translate-y-1/2 text-gray-300"></i>
            </div>
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2 text-sm text-white">
                <input type="checkbox"
                    class="rounded border-white/20 bg-white/10">
                مرا به خاطر بسپار
            </label>
        </div>

        <!-- Submit -->
        <button type="submit"
            class="w-full bg-[#34a898] text-white py-3 rounded-xl font-semibold transition duration-300 shadow-lg shadow-blue-500/30">
            ورود
        </button>
    </form>
</div>



    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>