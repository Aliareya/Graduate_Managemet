<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت فارغ جدید - سامانه فارغان</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'vazir': ['Vazirmatn', 'sans-serif'],
                    },
                    colors: {
                        'sidebar': '#1a2332',
                        'sidebar-hover': '#243044',
                        'primary': '#3b82f6',
                        'primary-dark': '#2563eb',
                        'primary-light': '#eff6ff',
                        'success': '#10b981',
                        'success-light': '#ecfdf5',
                        'warning': '#f59e0b',
                        'warning-light': '#fffbeb',
                    }
                }
            }
        }
    </script>
    <style>
        * { font-family: 'Vazirmatn', sans-serif; }
        .step-active { color: #3b82f6; border-color: #3b82f6; background-color: #eff6ff; }
        .step-completed { color: #3b82f6; border-color: #3b82f6; background-color: #3b82f6; color: white; }
        .step-inactive { color: #94a3b8; border-color: #e2e8f0; background-color: #f8fafc; }
    </style>
</head>
<body class="bg-gray-50 font-vazir">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-72 bg-sidebar text-white fixed right-0 top-0 bottom-0 overflow-y-auto z-50">
            <!-- Logo -->
            <div class="p-6 flex items-center gap-3 border-b border-gray-700/50">
                <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-lg font-bold">سامانه فارغان</h1>
                    <p class="text-xs text-gray-400">دانشگاه ملی</p>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="p-4 space-y-1">
                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-2">اصلی</p>
                
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <span class="text-sm">داشبورد</span>
                </a>

                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-4">مدیریت فارغان</p>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span class="text-sm">لیست فارغان</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 bg-primary rounded-lg text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                    <span class="text-sm font-medium">ثبت فارغ جدید</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                    </svg>
                    <span class="text-sm">پروفایل فارغان</span>
                </a>

                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-4">ساختار دانشگاه</p>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <span class="text-sm">مدیریت دانشکده‌ها</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <span class="text-sm">مدیریت دپارتمان‌ها</span>
                </a>

                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-4">خدمات</p>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-sm">فرصت‌های شغلی</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-sm">رویدادها</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                    </svg>
                    <span class="text-sm">اطلاعیه‌ها</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span class="text-sm">اسناد و مدارک</span>
                </a>

                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-4">گزارشات</p>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    <span class="text-sm">گزارشات</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                    </svg>
                    <span class="text-sm">تحلیل و آمار</span>
                </a>

                <p class="text-xs text-gray-500 uppercase tracking-wider px-3 mb-2 mt-4">سیستم</p>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <span class="text-sm">مدیریت کاربران</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                    </svg>
                    <span class="text-sm">نقش‌ها و دسترسی‌ها</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-300 hover:bg-sidebar-hover hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span class="text-sm">تنظیمات سیستم</span>
                </a>
            </nav>

            <!-- User Profile at bottom -->
            <div class="absolute bottom-0 right-0 left-0 p-4 border-t border-gray-700/50 bg-sidebar">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm">
                        م.ا
                    </div>
                    <div>
                        <p class="text-sm font-medium text-white">محمد امینی</p>
                        <p class="text-xs text-gray-400">مدیر سیستم</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 mr-72">
            <!-- Top Header -->
            <header class="bg-white border-b border-gray-200 px-8 py-4 flex items-center justify-between sticky top-0 z-40">
                <div class="flex items-center gap-4 flex-1 max-w-xl">
                    <div class="relative flex-1">
                        <input type="text" placeholder="جستجو در سامانه..." class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-2.5 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        <svg class="w-5 h-5 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <button class="relative p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        <span class="absolute top-1 right-1 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white"></span>
                    </button>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm">
                            م.ا
                        </div>
                        <div class="text-right hidden md:block">
                            <p class="text-sm font-medium text-gray-800">محمد امینی</p>
                            <p class="text-xs text-gray-500">مدیر سیستم</p>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="p-8">
                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-2 mb-2">
                        <h1 class="text-2xl font-bold text-gray-800">ثبت فارغ جدید</h1>
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </div>
                    <p class="text-gray-500">مرحله <span id="currentStep">1</span> از 4 – <span id="stepName">اطلاعات شخصی</span></p>
                </div>

                <!-- Progress Steps -->
                <div class="mb-8">
                    <div class="flex items-center justify-between">
                        <!-- Step 1 -->
                        <div class="flex flex-col items-center flex-1">
                            <div class="w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-active transition-all duration-300" id="step1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-600 font-medium">اطلاعات شخصی</span>
                        </div>
                        
                        <!-- Connector -->
                        <div class="flex-1 h-0.5 bg-gray-200 mx-2" id="connector1"></div>
                        
                        <!-- Step 2 -->
                        <div class="flex flex-col items-center flex-1">
                            <div class="w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-inactive transition-all duration-300" id="step2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-600 font-medium">اطلاعات تماس</span>
                        </div>
                        
                        <!-- Connector -->
                        <div class="flex-1 h-0.5 bg-gray-200 mx-2" id="connector2"></div>
                        
                        <!-- Step 3 -->
                        <div class="flex flex-col items-center flex-1">
                            <div class="w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-inactive transition-all duration-300" id="step3">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-600 font-medium">اطلاعات تحصیلی</span>
                        </div>
                        
                        <!-- Connector -->
                        <div class="flex-1 h-0.5 bg-gray-200 mx-2" id="connector3"></div>
                        
                        <!-- Step 4 -->
                        <div class="flex flex-col items-center flex-1">
                            <div class="w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-inactive transition-all duration-300" id="step4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-600 font-medium">اطلاعات شغلی</span>
                        </div>
                    </div>
                </div>

                <!-- Form Container -->
                <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm">
                    
                    <!-- Step 1: Personal Information -->
                    <div id="formStep1" class="form-step">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            اطلاعات شخصی
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    نام <span class="text-red-500">*</span>
                                </label>
                                <input type="text" placeholder="نام" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    تخلص <span class="text-red-500">*</span>
                                </label>
                                <input type="text" placeholder="تخلص" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    نام پدر
                                </label>
                                <input type="text" placeholder="نام پدر" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    جنسیت
                                </label>
                                <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                    <option value="">انتخاب کنید</option>
                                    <option value="male">مرد</option>
                                    <option value="female">زن</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    تاریخ تولد
                                </label>
                                <div class="relative">
                                    <input type="date" placeholder="mm/dd/yyyy" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Contact Information -->
                    <div id="formStep2" class="form-step hidden">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            اطلاعات تماس
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    شماره تماس
                                </label>
                                <input type="tel" placeholder="07XXXXXXXXX" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    ایمیل
                                </label>
                                <input type="email" placeholder="example@email.com" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    آدرس
                                </label>
                                <textarea rows="4" placeholder="آدرس کامل محل سکونت" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Educational Information -->
                    <div id="formStep3" class="form-step hidden">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                            </svg>
                            اطلاعات تحصیلی
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    شماره محصل <span class="text-red-500">*</span>
                                </label>
                                <input type="text" placeholder="مثال: 14001234" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    دانشکده <span class="text-red-500">*</span>
                                </label>
                                <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                    <option value="">انتخاب دانشکده</option>
                                    <option value="1">کامپیوتر ساینس</option>
                                    <option value="2">اقتصاد</option>
                                    <option value="3">انجنیری</option>
                                    <option value="4">حقوق و علوم سیاسی</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    دپارتمنت
                                </label>
                                <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                    <option value="">ابتدا دانشکده انتخاب کنید</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    سال ورودی
                                </label>
                                <input type="text" placeholder="مثال: ۱۳۸" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    سال فراغت <span class="text-red-500">*</span>
                                </label>
                                <input type="text" placeholder="مثال: ۱۴۰۲" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    درجه تحصیلی
                                </label>
                                <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                    <option value="">انتخاب کنید</option>
                                    <option value="bachelor">لیسانس</option>
                                    <option value="master">ماستر</option>
                                    <option value="phd">دکترا</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4: Employment Information -->
                    <div id="formStep4" class="form-step hidden">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            اطلاعات شغلی
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    وضعیت شغلی
                                </label>
                                <select class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                    <option value="">انتخاب کنید</option>
                                    <option value="employed">شاغل</option>
                                    <option value="unemployed">بیکار</option>
                                    <option value="studying">ادامه تحصیل</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    نام شرکت / اداره
                                </label>
                                <input type="text" placeholder="نام محل کار" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    سمت شغلی
                                </label>
                                <input type="text" placeholder="عنوان پوزیشن" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            </div>
                            <div class="md:col-span-3">
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    محل کار
                                </label>
                                <input type="text" placeholder="ولایت / شهر" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                            </div>
                        </div>

                        <!-- Summary Box -->
                        <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
                            <h3 class="text-sm font-bold text-gray-700 mb-4">خلاصه اطلاعات ثبت‌شده</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div>
                                    <span class="text-gray-500">نام کامل:</span>
                                    <span class="mr-2 font-medium text-gray-800">sssa saa</span>
                                </div>
                                <div>
                                    <span class="text-gray-500">شماره محصل:</span>
                                    <span class="mr-2 font-medium text-gray-800">kkk</span>
                                </div>
                                <div>
                                    <span class="text-gray-500">دانشکده:</span>
                                    <span class="mr-2 font-medium text-gray-800">علوم کامپیوتر</span>
                                </div>
                                <div>
                                    <span class="text-gray-500">دپارتمنت:</span>
                                    <span class="mr-2 font-medium text-gray-800">هوش مصنوعی</span>
                                </div>
                                <div>
                                    <span class="text-gray-500">سال ورودی:</span>
                                    <span class="mr-2 font-medium text-gray-800">78987</span>
                                </div>
                                <div>
                                    <span class="text-gray-500">سال فراغت:</span>
                                    <span class="mr-2 font-medium text-gray-800">erewqw</span>
                                </div>
                                <div>
                                    <span class="text-gray-500">تماس:</span>
                                    <span class="mr-2 font-medium text-gray-800">aA1234566543</span>
                                </div>
                                <div>
                                    <span class="text-gray-500">درجه:</span>
                                    <span class="mr-2 font-medium text-gray-800">لیسانس</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Navigation Buttons -->
                <div class="mt-8 flex items-center justify-between">
                    <button id="cancelBtn" class="px-6 py-3 border border-gray-200 rounded-xl text-gray-600 hover:bg-gray-50 transition-colors flex items-center gap-2">
                        <span>انصراف</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>

                    <!-- Progress Dots -->
                    <div class="flex items-center gap-2">
                        <div class="w-2.5 h-2.5 rounded-full bg-primary" id="dot1"></div>
                        <div class="w-2.5 h-2.5 rounded-full bg-gray-300" id="dot2"></div>
                        <div class="w-2.5 h-2.5 rounded-full bg-gray-300" id="dot3"></div>
                        <div class="w-2.5 h-2.5 rounded-full bg-gray-300" id="dot4"></div>
                    </div>

                    <button id="nextBtn" class="px-6 py-3 bg-primary text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm">
                        <span>مرحله بعد</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>

                    <button id="prevBtn" class="px-6 py-3 bg-primary text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm ">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                        <span>مرحله قبل</span>
                    </button>

                    <button id="submitBtn" class="px-6 py-3 bg-primary text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm ">
                        <span>ثبت نهایی</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </main>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 4;

        const stepNames = {
            1: 'اطلاعات شخصی',
            2: 'اطلاعات تماس',
            3: 'اطلاعات تحصیلی',
            4: 'اطلاعات شغلی'
        };

        function updateSteps() {
            // Hide all steps
            for (let i = 1; i <= totalSteps; i++) {
                document.getElementById(`formStep${i}`).classList.add('hidden');
                document.getElementById(`step${i}`).className = 'w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-inactive transition-all duration-300';
                document.getElementById(`dot${i}`).className = 'w-2.5 h-2.5 rounded-full bg-gray-300';
                
                if (i < totalSteps) {
                    document.getElementById(`connector${i}`).className = 'flex-1 h-0.5 bg-gray-200 mx-2';
                }
            }

            // Show current step
            document.getElementById(`formStep${currentStep}`).classList.remove('hidden');
            
            // Update completed steps
            for (let i = 1; i < currentStep; i++) {
                document.getElementById(`step${i}`).className = 'w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-completed transition-all duration-300';
                document.getElementById(`dot${i}`).className = 'w-2.5 h-2.5 rounded-full bg-primary';
                
                if (i < totalSteps) {
                    document.getElementById(`connector${i}`).className = 'flex-1 h-0.5 bg-primary mx-2';
                }
            }

            // Update current step
            document.getElementById(`step${currentStep}`).className = 'w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-active transition-all duration-300';
            document.getElementById(`dot${currentStep}`).className = 'w-2.5 h-2.5 rounded-full bg-primary';

            // Update header
            document.getElementById('currentStep').textContent = currentStep;
            document.getElementById('stepName').textContent = stepNames[currentStep];

            // Update buttons
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');
            const submitBtn = document.getElementById('submitBtn');
            const cancelBtn = document.getElementById('cancelBtn');

            if (currentStep === 1) {
                prevBtn.classList.add('hidden');
                cancelBtn.classList.remove('hidden');
            } else {
                prevBtn.classList.remove('hidden');
                cancelBtn.classList.add('hidden');
            }

            if (currentStep === totalSteps) {
                nextBtn.classList.add('hidden');
                submitBtn.classList.remove('hidden');
            } else {
                nextBtn.classList.remove('hidden');
                submitBtn.classList.add('hidden');
            }
        }

        document.getElementById('nextBtn').addEventListener('click', () => {
            if (currentStep < totalSteps) {
                currentStep++;
                updateSteps();
            }
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                updateSteps();
            }
        });

        document.getElementById('cancelBtn').addEventListener('click', () => {
            if (confirm('آیا مطمئن هستید که می‌خواهید انصراف دهید؟')) {
                window.location.href = '#';
            }
        });

        document.getElementById('submitBtn').addEventListener('click', () => {
            alert('اطلاعات با موفقیت ثبت شد!');
        });

        // Initialize
        updateSteps();
    </script>

</body>
</html>