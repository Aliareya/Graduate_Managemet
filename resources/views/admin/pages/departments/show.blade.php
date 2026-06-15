@extends('admin.layouts.adminLayout')
@section('admin_page_content')
    <!-- Page Content -->
    <div class="p-8">
        <!-- Breadcrumb & Actions -->
        <div class="mb-6 flex items-center justify-between">
            <div class="flex items-center gap-2 text-sm text-gray-500">
                <a href="{{ route('departments.index') }}" class="hover:text-primary transition-colors">مدیریت دپارتمان‌ها</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                <span class="text-gray-800 font-medium">جزئیات دپارتمان</span>
            </div>
            <div class="flex items-center gap-3">
                <button
                    class="px-4 py-2 border border-gray-200 bg-white rounded-lg text-gray-700 hover:bg-gray-50 transition-colors flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    <span>خروجی PDF</span>
                </button>
                <a href="#"
                    class="px-4 py-2 bg-red-800 text-white rounded-lg  transition-colors flex items-center gap-2">

                    <span>حذف دپارتمنت</span>
                </a>
            </div>
        </div>

        <!-- Main Department Header -->
        <div class="bg-white rounded-2xl border border-gray-200 p-8 mb-6 shadow-sm">
            <div class="flex items-start gap-6">
                <div
                    class="w-24 h-24 bg-blue-50 rounded-2xl flex items-center justify-center flex-shrink-0 border-2 border-blue-100">
                    <svg class="w-12 h-12 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div class="flex-1">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <span  class="text-xs text-primary bg-primary-light px-3 py-1 rounded-full font-medium">پوهنخی
                                {{ $department->faculty->name }}
                                </span>
                                @if ($department->status === 1)
                                  <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">فعال</span>   
                                @else
                                  <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-medium">فعال</span>   
                                @endif
                            </div>
                            <h1 class="text-3xl font-bold text-gray-800 mb-2">دپارتمنت  {{ $department->name }}</h1>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                    </svg>
                                    کد: {{ $department->code }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    تاسیس:  {{ $department->start_year }} 
                                </span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4">
                       {{ $department->description }}
                    </p>
                    <div class="flex items-center gap-6 text-sm">
                        <div class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>{{ $department->location }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>{{ $department->phone }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-600">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $department->email }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Recent Graduates & Activity -->
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">
            <!-- Recent Graduates -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm">
                <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                    <h2 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                        آخرین فارغ‌التحصیلان
                    </h2>
                    <a href={{ route('graduates.index') }} class="text-sm text-primary hover:text-primary-dark font-medium">مشاهده همه</a>
                </div>
                <div class="divide-y divide-gray-100">
                    @foreach ($graduate as $gradu)
                        <div class="p-4 hover:bg-gray-50 transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-sm font-bold text-primary">ع.ا</span>
                                    </div>
                                    <div class="flex gap-10">
                                        <a href={{ route('graduates.show',['graduate'=>$gradu->id]) }} class="font-medium text-gray-800 text-sm">{{ $gradu->first_name }}  {{ $gradu->last_name }}</a>
                                    </div>
                                </div>
                                <div class="flex items-center gap-10">
                                    <p class="text-xs text-gray-500">آیدی: {{ $gradu->student_id }} </p>
                                    <p class="text-xs text-black mt-1">ایمیل  : {{ $gradu->email }}</p>
                                    <p class="text-xs text-black mt-1">
                                        وضعیت :
                                        <b>
                                            @if ($gradu['is_employed'] === "yes")
                                            شاغل
                                            @endif
                                            @if ($gradu['is_employed'] === "no")
                                            {{ $gradu['job_status'] }}
                                            @endif
                                        </b>
                                    </p>
                                  
                                    <p class="text-xs text-black mt-1">سال فارغ : {{ $gradu->graduation_year }}</p>
                                    <p class="text-xs text-black mt-1">سال ورود : {{ $gradu->entry_year }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-4">
            <a href="{{ route('graduates.create') }}"
                class="p-6 bg-white rounded-xl border border-gray-200 hover:border-primary/30 hover:shadow-md transition-all flex items-center gap-4 group">
                <div
                    class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
                    <svg class="w-6 h-6 text-primary group-hover:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">ثبت فارغ جدید</h3>
                    <p class="text-xs text-gray-500">افزودن فارغ‌التحصیل</p>
                </div>
            </a>
            <a href="{{ route('facultes.create') }}"
                class="p-6 bg-white rounded-xl border border-gray-200 hover:border-primary/30 hover:shadow-md transition-all flex items-center gap-4 group">
                <div
                    class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center group-hover:bg-green-600 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6 text-green-600 group-hover:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm"> ثبت پوهنخی جدید</h3>
                </div>
            </a>
            <a href="{{ route('departments.create') }}"
                class="p-6 bg-white rounded-xl border border-gray-200 hover:border-primary/30 hover:shadow-md transition-all flex items-center gap-4 group">
                <div
                    class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6 text-purple-600 group-hover:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">ثبت دپارتمنت‌ جدید</h3>
                </div>
            </a>
            <a href="{{ route('home') }}"
                class="p-6 bg-white rounded-xl border border-gray-200 hover:border-primary/30 hover:shadow-md transition-all flex items-center gap-4 group">
                <div
                    class="w-12 h-12 bg-orange-50 rounded-xl flex items-center justify-center group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6 text-orange-600 group-hover:text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">داشبورد
                    </h3>
                </div>
            </a>
        </div>
    </div>
@endsection
