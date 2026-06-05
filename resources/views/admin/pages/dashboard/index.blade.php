<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه فارغان - داشبورد</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Vazirmatn', 'sans-serif'],
                    },
                    colors: {
                        sidebar: '#0f2337',
                        sidebarHover: '#1a3a5c',
                        primary: '#2563eb',
                        primaryLight: '#3b82f6',
                    }
                }
            }
        }
    </script>
    <style>
        * { font-family: 'Vazirmatn', sans-serif; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #94a3b8; border-radius: 3px; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-72 bg-sidebar text-white flex flex-col fixed right-0 top-0 bottom-0 z-50 overflow-y-auto">
            <!-- Logo -->
            <div class="p-5 flex items-center gap-3 border-b border-white/10">
                <div class="w-11 h-11 bg-primary rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                    </svg>
                </div>
                <div>
                    <h1 class="font-bold text-lg">سامانه فارغان</h1>
                    <p class="text-xs text-gray-400">دانشگاه ملی</p>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 py-4 px-3 space-y-1">
                <!-- اصلی -->
                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-2">اصلی</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 bg-primary rounded-lg text-white font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    داشبورد
                </a>

                <!-- مدیریت فارغان -->
                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-4">مدیریت فارغان</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    لیست فارغان
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                    ثبت فارغ جدید
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                    </svg>
                    پروفایل فارغان
                </a>

                <!-- ساختار دانشگاه -->
                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-4">ساختار دانشگاه</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    مدیریت دانشکده‌ها
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    مدیریت دپارتمنت‌ها
                </a>

                <!-- خدمات -->
                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-4">خدمات</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    فرصت‌های شغلی
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    رویدادها
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                    </svg>
                    اطلاعیه‌ها
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    اسناد و مدارک
                </a>

                <!-- گزارشات -->
                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-4">گزارشات</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    گزارشات
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                    </svg>
                    تحلیل و آمار
                </a>

                <!-- سیستم -->
                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-4">سیستم</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    مدیریت کاربران
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                    </svg>
                    نقش‌ها و دسترسی‌ها
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-gray-300 hover:bg-sidebarHover hover:text-white rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    تنظیمات سیستم
                </a>
            </nav>

            <!-- User Profile Bottom -->
            <div class="p-4 border-t border-white/10">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm">
                        م.ا
                    </div>
                    <div>
                        <p class="font-medium text-sm">محمد امینی</p>
                        <p class="text-xs text-gray-400">مدیر سیستم</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 mr-72">

            <!-- Top Bar -->
            <header class="bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between sticky top-0 z-40">
                <!-- Search -->
                <div class="flex-1 max-w-xl">
                    <div class="relative">
                        <input type="text" placeholder="جستجو در سامانه..." class="w-full bg-gray-50 border border-gray-200 rounded-xl py-2.5 pr-10 pl-4 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        <svg class="w-5 h-5 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>

                <!-- Right side actions -->
                <div class="flex items-center gap-4 mr-6">
                    <!-- Notification -->
                    <button class="relative p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        <span class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white"></span>
                    </button>

                    <!-- User -->
                    <div class="flex items-center gap-3 pr-4 border-r border-gray-200">
                        <div class="text-left">
                            <p class="font-medium text-sm text-gray-800">محمد امینی</p>
                            <p class="text-xs text-gray-500">مدیر سیستم</p>
                        </div>
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm">
                            م.ا
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <main class="p-6">
                <!-- Page Header -->
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">داشبورد</h1>
                    <p class="text-gray-500 mt-1 text-sm">نمای کلی از وضعیت فارغ‌التحصیلان و فعالیت‌های سامانه</p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4 mb-8">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-blue-600 bg-blue-50 px-2 py-1 rounded-lg">+/۲٪</span>
                        </div>
                        <p class="text-2xl font-bold text-gray-800 mb-1">۱۲,۴۸۶</p>
                        <p class="text-xs text-gray-500">تعداد کل فارغان</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-cyan-50 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-gray-600 bg-gray-100 px-2 py-1 rounded-lg">ثابت</span>
                        </div>
                        <p class="text-2xl font-bold text-gray-800 mb-1">۹</p>
                        <p class="text-xs text-gray-500">تعداد دانشکده‌ها</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-teal-600 bg-teal-50 px-2 py-1 rounded-lg">+۲</span>
                        </div>
                        <p class="text-2xl font-bold text-gray-800 mb-1">۴۲</p>
                        <p class="text-xs text-gray-500">تعداد دپارتمنت‌ها</p>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-green-600 bg-green-50 px-2 py-1 rounded-lg">+/۱٪</span>
                        </div>
                        <p class="text-2xl font-bold text-gray-800 mb-1">,۹۲۱</p>
                        <p class="text-xs text-gray-500">فارغان شاغل</p>
                    </div>

                    <!-- Card 5 -->
                    <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-red-600 bg-red-50 px-2 py-1 rounded-lg">-۱/۸٪</span>
                        </div>
                        <p class="text-2xl font-bold text-gray-800 mb-1">۱,۴۳۲</p>
                        <p class="text-xs text-gray-500">فارغان بیکار</p>
                    </div>

                    <!-- Card 6 -->
                    <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-medium text-indigo-600 bg-indigo-50 px-2 py-1 rounded-lg">+۸/۷٪</span>
                        </div>
                        <p class="text-2xl font-bold text-gray-800 mb-1">۱,۲۰۴</p>
                        <p class="text-xs text-gray-500">فارغان جدید سال جاری</p>
                    </div>
                </div>

                <!-- Two Column Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                    <!-- Recent Graduates Table -->
                    <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                        <div class="p-5 flex items-center justify-between border-b border-gray-100">
                            <h2 class="text-lg font-bold text-gray-800">فارغ‌التحصیلان اخیر</h2>
                            <button class="flex items-center gap-1.5 text-sm text-gray-500 hover:text-primary bg-gray-50 hover:bg-blue-50 px-3 py-1.5 rounded-lg transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                                این هفته
                            </button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="bg-gray-50/80">
                                        <th class="text-right text-xs font-semibold text-gray-500 px-5 py-3">نام و تخلص</th>
                                        <th class="text-right text-xs font-semibold text-gray-500 px-5 py-3">دانشکده</th>
                                        <th class="text-right text-xs font-semibold text-gray-500 px-5 py-3">دپارتمنت</th>
                                        <th class="text-right text-xs font-semibold text-gray-500 px-5 py-3">سال فراغت</th>
                                        <th class="text-right text-xs font-semibold text-gray-500 px-5 py-3">وضعیت</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-50">
                                    <tr class="hover:bg-gray-50/50 transition-colors">
                                        <td class="px-5 py-4 font-medium text-gray-800 text-sm">علی احمدی</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">کمپیوترساینس</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">دیتابیس</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">۱۴۰۲</td>
                                        <td class="px-5 py-4">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">شاغل</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50 transition-colors">
                                        <td class="px-5 py-4 font-medium text-gray-800 text-sm">زهرا کریمی</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">اقتصاد</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">مدیریت مالی</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">۱۴۰۲</td>
                                        <td class="px-5 py-4">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">شاغل</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50 transition-colors">
                                        <td class="px-5 py-4 font-medium text-gray-800 text-sm">محمد رضایی</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">انجینی</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">مهندسی نرم‌افزار</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">۱۴۱</td>
                                        <td class="px-5 py-4">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-700">بیکار</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50 transition-colors">
                                        <td class="px-5 py-4 font-medium text-gray-800 text-sm">فاطمه نوری</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">حقوق و علوم سیاسی</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">حقوق خصوصی</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">۴۰۲</td>
                                        <td class="px-5 py-4">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">شاغل</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50 transition-colors">
                                        <td class="px-5 py-4 font-medium text-gray-800 text-sm">حسین صادقی</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">زراعت</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">علوم خاک</td>
                                        <td class="px-5 py-4 text-sm text-gray-600">۱۴۰۰</td>
                                        <td class="px-5 py-4">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">ادامه تحصیل</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Upcoming Events -->
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                        <div class="flex items-center gap-2 mb-5">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <h2 class="text-lg font-bold text-gray-800">رویدادهای پیش رو</h2>
                        </div>

                        <div class="space-y-3">
                            <!-- Event 1 -->
                            <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 hover:border-primary/30 hover:bg-blue-50/30 transition-all cursor-pointer group">
                                <h3 class="font-semibold text-sm text-gray-800 mb-1 group-hover:text-primary transition-colors">همایش سالانه فارغ‌التحصیلان</h3>
                                <p class="text-xs text-gray-500">۲۵ سنبله ۱۴۰۳ · تالار مرکزی</p>
                            </div>

                            <!-- Event 2 -->
                            <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 hover:border-primary/30 hover:bg-blue-50/30 transition-all cursor-pointer group">
                                <h3 class="font-semibold text-sm text-gray-800 mb-1 group-hover:text-primary transition-colors">نمایشگاه فرصت‌های شغلی</h3>
                                <p class="text-xs text-gray-500">۱۲ میزان ۱۴۰۳ · سالن انجینی</p>
                            </div>

                            <!-- Event 3 -->
                            <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 hover:border-primary/30 hover:bg-blue-50/30 transition-all cursor-pointer group">
                                <h3 class="font-semibold text-sm text-gray-800 mb-1 group-hover:text-primary transition-colors">کارگاه مهارت‌های ارتباطی</h3>
                                <p class="text-xs text-gray-500">۳ عقرب ۱۰۳ · دانشکده اقتصاد</p>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

</body>
</html>