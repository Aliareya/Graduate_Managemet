@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <!-- Page Content -->
    <div class="p-8">
        <!-- Page Header -->
        <div class="mb-8 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">مدیریت پوهنخی ها</h1>
                <p class="text-gray-500 mt-1">فهرست پوهنخی های فعال دانشگاه</p>
            </div>
            <a href="{{ route('facultes.create') }}"
                class="flex items-center gap-2 px-5 py-2.5 bg-blue-500 text-white rounded-lg hover:bg-primary-dark transition-colors shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span class="text-sm font-medium">افزودن پوهنخی</span>
            </a>
        </div>

        <!-- Faculty Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach ($faculties as $faculty )
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-800 mb-1">{{ $faculty->name }}</h3>
                            <p class="text-sm text-gray-500">رئیس: {{ $faculty->head_name }}</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3 mt-4">
                        <div class="bg-gray-50 rounded-xl p-3 text-center">
                            <div class="flex items-center justify-center gap-1 mb-1">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <span class="text-xs text-gray-500">دپارتمنت</span>
                            </div>
                            <p class="text-xl font-bold text-gray-800">۶</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-3 text-center">
                            <div class="flex items-center justify-center gap-1 mb-1">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-xs text-gray-500">فارغ</span>
                            </div>
                            <p class="text-xl font-bold text-gray-800">,۱۴۳</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
