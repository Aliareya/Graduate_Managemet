@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <div class="p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">مدیریت دپارتمنت ها</h1>
                    <p class="text-gray-500 mt-1">فهرست دپارتمنت های فعال دانشگاه</p>
                </div>
                <a href="{{ route('departments.create') }}"
                    class="flex items-center gap-2 px-5 py-2.5 bg-blue-500 text-white rounded-lg hover:bg-primary-dark transition-colors shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="text-sm font-medium">افزودن دپارتمنت</span>
                </a>
            </div>

            <!-- Filter Bar -->
            <div class="mt-6 bg-white rounded-xl border border-gray-200 p-4 flex flex-col md:flex-row gap-4">
                <div class="flex-1 relative">
                    <input type="text" placeholder="جستجو بر اساس نام دپارتمان..."
                        class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-2.5 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <select
                    class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    <option value="">همه دانشکده‌ها</option>
                    <option value="cs">دانشکده علوم کامپیوتر</option>
                    <option value="eco">دانشکده اقتصاد</option>
                    <option value="eng">دانشکده انجنیری</option>
                    <option value="law">دانشکده حقوق و علوم سیاسی</option>
                    <option value="agr">دانشکده زراعت</option>
                    <option value="lit">دانشکده ادبیات</option>
                    <option value="med">دانشکده طب</option>
                    <option value="edu">دانشکده تعلیم و تربیه</option>
                    <option value="jrn">دانشکده ژورنالیزم</option>
                </select>
                <button
                    class="flex items-center gap-2 px-4 py-2.5 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    <span class="text-sm">فیلترها</span>
                </button>
            </div>
        </div>

        <!-- Department Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach ($departments as $department )
                <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-xs text-primary bg-primary-light px-2 py-0.5 rounded-full">
                                {{ $department['name'] }}
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">دپارتمان {{ $department['name'] }}</h3>
                        <p class="text-sm text-gray-500">رئیس: {{ $department['head_name'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                        </svg>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-3 mt-4">
  
                    <div class="bg-gray-50 rounded-xl p-3 text-center">
                        <div class="flex items-center justify-center gap-1 mb-1">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-xs text-gray-500"> تعدا فارغان</span>
                        </div>
                        <p class="text-xl font-bold text-gray-800">۲۳۴</p>
                    </div>

                </div>
                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="text-xs text-gray-500">آخرین بروزرسانی: {{ $department->updated_at->diffForHumans() }}</span>
                    <div class="flex items-center gap-2">
                        <a href={{ route('departments.show' , ['department'=>$department->id]) }}
                            class="p-1.5 text-gray-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors">
                           <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                        <a href={{ route('departments.edit' , ['department'=>$department->id]) }}
                            class="p-1.5 text-gray-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            
        </div>

        <!-- Pagination -->
        <div class="mt-8 bg-white rounded-xl border border-gray-200 p-4 flex items-center justify-between">
            <div class="text-sm text-gray-600">
                نمایش ۱ تا ۱۰ از ۴۲ دپارتمان
            </div>
            <div class="flex items-center gap-2">
                <button
                    class="px-4 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors">قبلی</button>
                <button class="px-4 py-2 bg-primary text-white rounded-lg text-sm">۱</button>
                <button
                    class="px-4 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors"></button>
                <button
                    class="px-4 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors">۳</button>
                <button
                    class="px-4 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors">۴</button>
                <button
                    class="px-4 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors"></button>
                <button
                    class="px-4 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors">بعدی</button>
            </div>
        </div>
    </div>
@endsection
