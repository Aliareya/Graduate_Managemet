@extends('admin.layouts.adminLayout')
@section('admin_page_content')
    <main class="p-8">

        <!-- Page Title -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900">@lang('dashboard.title')</h1>
            <p class="text-sm text-gray-500 mt-1">@lang('dashboard.subtitle')</p>
        </div>

    {{-- hero --}}
        <div
            class="bg-[#34a898] mb-7 rounded-3xl p-6 md:p-8 text-white relative overflow-hidden animate-slide-up">
            <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full -translate-x-32 -translate-y-32 blur-3xl">
            </div>
            <div
                class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/20 rounded-full translate-x-48 translate-y-48 blur-3xl">
            </div>
            <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-white/20 backdrop-blur rounded-full text-xs font-medium">
                            <i class="fas fa-circle text-green-400 text-[8px] ml-1 animate-pulse"></i>
                             @lang('dashboard.system_active')
                        </span>
                        <span class="px-3 py-1 bg-white/20 backdrop-blur rounded-full text-xs font-medium">
                            <i class="fas fa-calendar ml-1"></i>
                            {{-- {{ diffForHumans() }} --}}
                        </span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">سلام {{ auth()->user()->name }} 👋</h1>
                    <p class="text-indigo-100 text-sm md:text-base max-w-xl">
                       @lang('dashboard.welcome_message')
                    </p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('graduates.create') }}"
                        class="px-5 py-3 bg-white text-green-700 rounded-xl font-semibold hover:bg-indigo-50 transition-colors shadow-lg flex items-center gap-2">
                        <i class="fas fa-plus"></i>
                       @lang('dashboard.add_graduate')
                    </a>
                    <button onclick="exportData()"
                        class="px-5 py-3 bg-white/10 backdrop-blur border border-white/20 text-white rounded-xl font-semibold hover:bg-white/20 transition-colors flex items-center gap-2">
                        <i class="fas fa-download"></i>
                        {{ __('dashboard.logout') }}
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5 mb-8">

            <!-- Card 1: Total Alumni -->
            <div class="bg-white rounded-2xl border border-gray-500 p-5 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-lg">+/۲٪</span>
                </div>
                <p class="text-2xl font-bold text-gray-900">{{ $dashboard['total_graduate'] }}</p>
                <p class="text-xs text-gray-500 mt-1">@lang('dashboard.total_graduates')</p>
            </div>

            <!-- Card 2: Faculties -->
            <div class="bg-white rounded-2xl border border-gray-500 p-5 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-cyan-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-gray-500 bg-gray-100 px-2 py-1 rounded-lg">ثابت</span>
                </div>
                <p class="text-2xl font-bold text-gray-900">{{ $dashboard['total_faculties'] }}</p>
                <p class="text-xs text-gray-500 mt-1">@lang('dashboard.total_faculties')</p>
            </div>

            <!-- Card 3: Departments -->
            <div class="bg-white rounded-2xl border border-gray-500 p-5 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-lg">+۲</span>
                </div>
                <p class="text-2xl font-bold text-gray-900">{{ $dashboard['total_department'] }}</p>
                <p class="text-xs text-gray-500 mt-1">@lang('dashboard.total_departments')</p>
            </div>

            <!-- Card 4: Employed -->
            <div class="bg-white rounded-2xl border border-gray-500 p-5 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-lg">+۵/۱٪</span>
                </div>
                <p class="text-2xl font-bold text-gray-900">{{ $dashboard['total_employe'] }}</p>
                <p class="text-xs text-gray-500 mt-1"> @lang('dashboard.employed_graduates')</p>
            </div>

            <!-- Card 5: Unemployed -->
            <div class="bg-white rounded-2xl border border-gray-500 p-5 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-red-600 bg-red-50 px-2 py-1 rounded-lg">-۱/۸٪</span>
                </div>
                <p class="text-2xl font-bold text-gray-900">{{ $dashboard['total_unemploye'] }}</p>
                <p class="text-xs text-gray-500 mt-1"> @lang('dashboard.unemployed_graduates')</p>
            </div>



        </div>

        <!-- Bottom Section: Table + Events -->
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">

            <!-- Recent Graduates Table -->
            <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-100 shadow-sm">
                <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900"> @lang('dashboard.recent_graduates')</h2>
                    <button
                        class="text-xs text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1 bg-blue-50 px-3 py-1.5 rounded-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                       @lang('dashboard.this_week')
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-xs text-gray-500 border-b border-gray-100">
                                <th class="text-right px-6 py-3 font-medium"> @lang('dashboard.full_name') </th>
                                <th class="text-right px-6 py-3 font-medium">@lang('dashboard.faculty')</th>
                                <th class="text-right px-6 py-3 font-medium">@lang('dashboard.department')</th>
                                <th class="text-right px-6 py-3 font-medium">@lang('dashboard.graduation_year') </th>
                                <th class="text-right px-6 py-3 font-medium">@lang('dashboard.status')</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 font-semibold text-gray-900">علی احمدی</td>
                                <td class="px-6 py-4 text-gray-600">کمپیوترساینس</td>
                                <td class="px-6 py-4 text-gray-600">دیتابیس</td>
                                <td class="px-6 py-4 text-gray-600">۱۴۰۲</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">شاغل</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 font-semibold text-gray-900">زهرا کریمی</td>
                                <td class="px-6 py-4 text-gray-600">اقتصاد</td>
                                <td class="px-6 py-4 text-gray-600">مدیریت مالی</td>
                                <td class="px-6 py-4 text-gray-600">۱۴۰۲</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">شاغل</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 font-semibold text-gray-900">محمد رضایی</td>
                                <td class="px-6 py-4 text-gray-600">انجنیری</td>
                                <td class="px-6 py-4 text-gray-600">مهندسی نرم‌افزار</td>
                                <td class="px-6 py-4 text-gray-600">۱۴۰۱</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-700">بیکار</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 font-semibold text-gray-900">فاطمه نوری</td>
                                <td class="px-6 py-4 text-gray-600">حقوق و علوم سیاسی</td>
                                <td class="px-6 py-4 text-gray-600">حقوق خصوصی</td>
                                <td class="px-6 py-4 text-gray-600">۱۴۲</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">شاغل</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 font-semibold text-gray-900">حسین صادقی</td>
                                <td class="px-6 py-4 text-gray-600">زراعت</td>
                                <td class="px-6 py-4 text-gray-600">علوم خاک</td>
                                <td class="px-6 py-4 text-gray-600">۱۴۰۰</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">ادامه
                                        تحصیل</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </main>
@endsection
