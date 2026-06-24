<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گزارش‌ها - سیستم فارغان دانشگاه هرات</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Vazirmatn Font for Persian Typography -->
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    
    <!-- Custom Config to match your exact brand colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3BA89D',      // Your Teal
                        'primary-light': '#E6F5F3',
                        navy: '#1A2332',         // Your Sidebar Dark
                        'navy-light': '#2C3E50',
                        bg: '#F4F7F9',
                    },
                    fontFamily: {
                        sans: ['Vazirmatn', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Scrollbar for a cleaner look */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        
        /* Smooth transitions */
        .transition-all { transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 300ms; }
    </style>
</head>
<body class="bg-bg font-sans text-gray-700 antialiased h-screen flex overflow-hidden">

    <!-- ================= SIDEBAR ================= -->
    <aside class="w-72 bg-navy text-white flex-shrink-0 hidden md:flex flex-col shadow-xl z-20">
        <!-- Logo Area -->
        <div class="h-20 flex items-center justify-center border-b border-white/10 px-6">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-primary/30">
                    🎓
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-lg leading-tight">سیستم فارغان</span>
                    <span class="text-xs text-gray-400">دانشگاه هرات</span>
                </div>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 overflow-y-auto py-6 px-4 space-y-2">
            
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-white/5 hover:text-white rounded-xl transition-all group">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span>داشبورد</span>
            </a>

            <!-- Active Link -->
            <a href="#" class="flex items-center gap-3 px-4 py-3 bg-primary text-white rounded-xl shadow-lg shadow-primary/20 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                <span class="font-medium">گزارش‌ها</span>
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-white/5 hover:text-white rounded-xl transition-all group">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <span>لیست فارغان</span>
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-white/5 hover:text-white rounded-xl transition-all group">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                <span>ثبت فارغ جدید</span>
            </a>

            <div class="pt-4 pb-2 px-4 text-xs font-bold text-gray-500 uppercase tracking-wider">ساختار پوهنځی‌ها</div>

            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-white/5 hover:text-white rounded-xl transition-all group">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                <span>مدیریت پوهنځی‌ها</span>
            </a>
            
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-400 hover:bg-white/5 hover:text-white rounded-xl transition-all group">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                <span>مدیریت دیپارتمنت‌ها</span>
            </a>
        </nav>

        <!-- User Profile Bottom -->
        <div class="p-4 border-t border-white/10">
            <div class="flex items-center gap-3 p-2 rounded-xl hover:bg-white/5 cursor-pointer transition-all">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-teal-700 flex items-center justify-center text-white font-bold text-sm border-2 border-white/20">AE</div>
                <div class="flex flex-col">
                    <span class="text-sm font-medium text-white">Alireza Ebrahimi</span>
                    <span class="text-[10px] text-gray-400">مدیر سیستم</span>
                </div>
            </div>
        </div>
    </aside>

    <!-- ================= MAIN CONTENT ================= -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">
        
        <!-- Mobile Header (Visible only on small screens) -->
        <header class="md:hidden h-16 bg-white border-b flex items-center justify-between px-4 z-10">
            <div class="font-bold text-navy">سیستم فارغان</div>
            <button class="text-gray-500"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></button>
        </header>

        <!-- Scrollable Content Area -->
        <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
            
            <!-- Page Title & Date -->
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-navy">گزارش‌های تحلیلی</h1>
                    <p class="text-sm text-gray-500 mt-1">نمای کلی از وضعیت تحصیلی و شغلی فارغان در بازه زمانی انتخاب شده</p>
                </div>
                <div class="flex items-center gap-3 bg-white px-4 py-2 rounded-xl shadow-sm border border-gray-100">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="text-sm font-medium text-gray-600">۱۴۵/۰۳/۰۳</span>
                </div>
            </div>

            <!-- Filter & Export Bar -->
            <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 mb-8 flex flex-wrap items-center gap-4">
                <div class="flex-1 min-w-[200px] grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <select class="w-full bg-gray-50 border border-gray-200 text-gray-700 text-sm rounded-xl focus:ring-primary focus:border-primary block p-2.5 outline-none">
                        <option>همه پوهنځی‌ها</option>
                        <option>کمپیوتر ساینس</option>
                        <option>انجنیری</option>
                        <option>طب</option>
                    </select>
                    <select class="w-full bg-gray-50 border border-gray-200 text-gray-700 text-sm rounded-xl focus:ring-primary focus:border-primary block p-2.5 outline-none">
                        <option>سال فراغت: همه</option>
                        <option>۱۴۰۴</option>
                        <option>۱۴۰۳</option>
                    </select>
                    <div class="flex items-center gap-2 bg-gray-50 border border-gray-200 rounded-xl px-3 py-2">
                        <input type="date" class="bg-transparent text-sm text-gray-600 outline-none w-full" value="2026-06-01">
                        <span class="text-gray-400 text-xs">تا</span>
                        <input type="date" class="bg-transparent text-sm text-gray-600 outline-none w-full" value="2026-06-24">
                    </div>
                </div>
                
                <div class="flex items-center gap-2 w-full sm:w-auto">
                    <button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2.5 bg-red-50 text-red-600 rounded-xl hover:bg-red-100 transition-colors text-sm font-medium border border-red-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        PDF
                    </button>
                    <button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2.5 bg-green-50 text-green-600 rounded-xl hover:bg-green-100 transition-colors text-sm font-medium border border-green-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        Excel
                    </button>
                    <button class="flex-1 sm:flex-none flex items-center justify-center gap-2 px-4 py-2.5 bg-primary-light text-primary rounded-xl hover:bg-primary hover:text-white transition-all text-sm font-medium border border-primary/20">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                        چاپ
                    </button>
                </div>
            </div>

            <!-- KPI Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-md transition-all">
                    <div class="absolute top-0 right-0 w-1 h-full bg-primary"></div>
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-sm text-gray-500 font-medium mb-1">میانگین معدل کل</p>
                            <h3 class="text-3xl font-bold text-navy">3.45</h3>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-primary-light flex items-center justify-center text-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                    </div>
                    <div class="flex items-center gap-1 text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-lg w-fit">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                        <span>+0.2 نسبت به سال قبل</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-md transition-all">
                    <div class="absolute top-0 right-0 w-1 h-full bg-red-500"></div>
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-sm text-gray-500 font-medium mb-1">فارغان بیکار</p>
                            <h3 class="text-3xl font-bold text-navy">1</h3>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-red-50 flex items-center justify-center text-red-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        </div>
                    </div>
                    <div class="flex items-center gap-1 text-xs font-bold text-red-600 bg-red-50 px-2 py-1 rounded-lg w-fit">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        <span>-1.8% کاهش</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-md transition-all">
                    <div class="absolute top-0 right-0 w-1 h-full bg-green-500"></div>
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-sm text-gray-500 font-medium mb-1">فارغان شاغل</p>
                            <h3 class="text-3xl font-bold text-navy">2</h3>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-green-50 flex items-center justify-center text-green-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                    </div>
                    <div class="flex items-center gap-1 text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-lg w-fit">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                        <span>+5.1% افزایش</span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative overflow-hidden group hover:shadow-md transition-all">
                    <div class="absolute top-0 right-0 w-1 h-full bg-blue-500"></div>
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <p class="text-sm text-gray-500 font-medium mb-1">تعداد کل فارغان</p>
                            <h3 class="text-3xl font-bold text-navy">3</h3>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                    </div>
                    <div class="flex items-center gap-1 text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-lg w-fit">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        <span>+2 نفر جدید</span>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                
                <!-- Bar Chart: Graduates by Department -->
                <div class="lg:col-span-2 bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <h3 class="text-lg font-bold text-navy mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        تعداد فارغان در هر دیپارتمنت
                    </h3>
                    
                    <!-- CSS Only Bar Chart -->
                    <div class="h-64 flex items-end justify-around gap-4 pt-8 pb-2 border-b border-gray-100 relative">
                        <!-- Grid lines background -->
                        <div class="absolute inset-0 flex flex-col justify-between pointer-events-none opacity-20">
                            <div class="border-t border-gray-300 w-full"></div>
                            <div class="border-t border-gray-300 w-full"></div>
                            <div class="border-t border-gray-300 w-full"></div>
                            <div class="border-t border-gray-300 w-full"></div>
                        </div>

                        <!-- Bar Item 1 -->
                        <div class="flex flex-col items-center gap-3 z-10 w-full group">
                            <div class="relative w-full flex justify-center">
                                <div class="w-12 bg-primary rounded-t-lg transition-all duration-500 group-hover:opacity-80" style="height: 180px;"></div>
                                <div class="absolute -top-8 bg-navy text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">45</div>
                            </div>
                            <span class="text-xs text-gray-500 font-medium text-center">کمپیوتر ساینس</span>
                        </div>
                        
                        <!-- Bar Item 2 -->
                        <div class="flex flex-col items-center gap-3 z-10 w-full group">
                            <div class="relative w-full flex justify-center">
                                <div class="w-12 bg-primary/70 rounded-t-lg transition-all duration-500 group-hover:opacity-80" style="height: 140px;"></div>
                                <div class="absolute -top-8 bg-navy text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">32</div>
                            </div>
                            <span class="text-xs text-gray-500 font-medium text-center">انجنیری</span>
                        </div>

                        <!-- Bar Item 3 -->
                        <div class="flex flex-col items-center gap-3 z-10 w-full group">
                            <div class="relative w-full flex justify-center">
                                <div class="w-12 bg-primary/40 rounded-t-lg transition-all duration-500 group-hover:opacity-80" style="height: 90px;"></div>
                                <div class="absolute -top-8 bg-navy text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">18</div>
                            </div>
                            <span class="text-xs text-gray-500 font-medium text-center">طب</span>
                        </div>

                         <!-- Bar Item 4 -->
                         <div class="flex flex-col items-center gap-3 z-10 w-full group">
                            <div class="relative w-full flex justify-center">
                                <div class="w-12 bg-primary/20 rounded-t-lg transition-all duration-500 group-hover:opacity-80" style="height: 50px;"></div>
                                <div class="absolute -top-8 bg-navy text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">8</div>
                            </div>
                            <span class="text-xs text-gray-500 font-medium text-center">حقوق</span>
                        </div>
                    </div>
                </div>

                <!-- Donut Chart: Employment Status -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex flex-col">
                    <h3 class="text-lg font-bold text-navy mb-6 flex items-center gap-2">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                        وضعیت اشتغال فارغان
                    </h3>
                    
                    <div class="flex-1 flex items-center justify-center relative">
                        <!-- CSS Conic Gradient Donut -->
                        <div class="w-48 h-48 rounded-full relative flex items-center justify-center" 
                             style="background: conic-gradient(#3BA89D 0% 67%, #EF4444 67% 100%);">
                            <!-- Inner white circle to make it a donut -->
                            <div class="w-32 h-32 bg-white rounded-full flex flex-col items-center justify-center shadow-inner">
                                <span class="text-3xl font-bold text-navy">67%</span>
                                <span class="text-xs text-gray-400">اشتغال</span>
                            </div>
                        </div>
                    </div>

                    <!-- Legend -->
                    <div class="mt-6 space-y-3">
                        <div class="flex items-center justify-between p-3 bg-green-50 rounded-xl border border-green-100">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-primary"></div>
                                <span class="text-sm font-medium text-gray-700">شاغل (Employed)</span>
                            </div>
                            <span class="text-sm font-bold text-primary">67%</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-red-50 rounded-xl border border-red-100">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <span class="text-sm font-medium text-gray-700">بیکار (Unemployed)</span>
                            </div>
                            <span class="text-sm font-bold text-red-500">33%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Graduates Table -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                    <h3 class="text-lg font-bold text-navy">لیست آخرین فارغان ثبت‌شده</h3>
                    <button class="text-sm text-primary hover:text-primary-dark font-medium flex items-center gap-1">
                        مشاهده همه
                        <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-right">
                        <thead class="bg-gray-50 text-gray-500 text-xs uppercase font-semibold">
                            <tr>
                                <th class="px-6 py-4 rounded-tr-xl">نام کامل</th>
                                <th class="px-6 py-4">دیپارتمنت</th>
                                <th class="px-6 py-4">سال فراغت</th>
                                <th class="px-6 py-4">معدل (GPA)</th>
                                <th class="px-6 py-4">وضعیت شغلی</th>
                                <th class="px-6 py-4 rounded-tl-xl text-center">عملیات</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-sm">
                            <!-- Row 1 -->
                            <tr class="hover:bg-gray-50 transition-colors group">
                                <td class="px-6 py-4 font-medium text-navy flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-xs font-bold">م.ع</div>
                                    محمد احمدی
                                </td>
                                <td class="px-6 py-4 text-gray-600">کمپیوتر ساینس</td>
                                <td class="px-6 py-4 text-gray-600">۱۴۰۴</td>
                                <td class="px-6 py-4 font-bold text-navy">3.85</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        شاغل
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-gray-400 hover:text-primary transition-colors p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    </button>
                                </td>
                            </tr>
                            
                            <!-- Row 2 -->
                            <tr class="hover:bg-gray-50 transition-colors group">
                                <td class="px-6 py-4 font-medium text-navy flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center text-xs font-bold">ف.ر</div>
                                    فاطمه رحیمی
                                </td>
                                <td class="px-6 py-4 text-gray-600">طب</td>
                                <td class="px-6 py-4 text-gray-600">۱۴۳</td>
                                <td class="px-6 py-4 font-bold text-navy">3.92</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        بیکار
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-gray-400 hover:text-primary transition-colors p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    </button>
                                </td>
                            </tr>

                             <!-- Row 3 -->
                             <tr class="hover:bg-gray-50 transition-colors group">
                                <td class="px-6 py-4 font-medium text-navy flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold">ع.ک</div>
                                    علی کریمی
                                </td>
                                <td class="px-6 py-4 text-gray-600">انجنیری</td>
                                <td class="px-6 py-4 text-gray-600">۱۰۴</td>
                                <td class="px-6 py-4 font-bold text-navy">3.45</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        شاغل
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-gray-400 hover:text-primary transition-colors p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Footer -->
            <footer class="mt-8 text-center text-xs text-gray-400 pb-4">
                © ۱۴۰۵ سیستم فارغان دانشگاه هرات. تمامی حقوق محفوظ است.
            </footer>

        </div>
    </main>

</body>
</html>