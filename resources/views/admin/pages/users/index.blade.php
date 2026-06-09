@extends('admin.layouts.adminLayout')
@section('admin_page_content')
    <!-- Simple User Table Card -->
<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <!-- Table Header -->
    <div class="bg-gray-50 border-b border-gray-200 px-6 py-4">
        <h3 class="font-bold text-gray-800 text-lg">کاربران</h3>
    </div>
    
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="text-right text-xs font-semibold text-gray-600 py-3 px-6">کاربر</th>
                    <th class="text-right text-xs font-semibold text-gray-600 py-3 px-6">نقش</th>
                    <th class="text-right text-xs font-semibold text-gray-600 py-3 px-6">وضعیت</th>
                    <th class="text-center text-xs font-semibold text-gray-600 py-3 px-6">عملیات</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                
                <!-- Row 1 -->
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white font-bold text-sm">
                                م.ا
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">محمد امینی</p>
                                <p class="text-xs text-gray-500">m.amini@uni.af</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <span class="text-sm text-gray-700">مدیر سیستم</span>
                    </td>
                    <td class="py-4 px-6">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                            <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                            فعال
                        </span>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center justify-center gap-2">
                            <button class="w-7 h-7 rounded-lg bg-blue-50 hover:bg-blue-100 text-blue-600 flex items-center justify-center transition">
                                <i class="fas fa-edit text-xs"></i>
                            </button>
                            <button class="w-7 h-7 rounded-lg bg-red-50 hover:bg-red-100 text-red-600 flex items-center justify-center transition">
                                <i class="fas fa-trash text-xs"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 2 -->
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center text-white font-bold text-sm">
                                ن.ک
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">ناهید کاظمی</p>
                                <p class="text-xs text-gray-500">n.kazemi@uni.af</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <span class="text-sm text-gray-700">کارشناس آموزش</span>
                    </td>
                    <td class="py-4 px-6">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                            <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                            فعال
                        </span>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center justify-center gap-2">
                            <button class="w-7 h-7 rounded-lg bg-blue-50 hover:bg-blue-100 text-blue-600 flex items-center justify-center transition">
                                <i class="fas fa-edit text-xs"></i>
                            </button>
                            <button class="w-7 h-7 rounded-lg bg-red-50 hover:bg-red-100 text-red-600 flex items-center justify-center transition">
                                <i class="fas fa-trash text-xs"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 3 -->
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-teal-500 to-teal-600 flex items-center justify-center text-white font-bold text-sm">
                                ب.ن
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">بهرام نوری</p>
                                <p class="text-xs text-gray-500">b.nouri@uni.af</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <span class="text-sm text-gray-700">مسئول فارغان</span>
                    </td>
                    <td class="py-4 px-6">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                            <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                            فعال
                        </span>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center justify-center gap-2">
                            <button class="w-7 h-7 rounded-lg bg-blue-50 hover:bg-blue-100 text-blue-600 flex items-center justify-center transition">
                                <i class="fas fa-edit text-xs"></i>
                            </button>
                            <button class="w-7 h-7 rounded-lg bg-red-50 hover:bg-red-100 text-red-600 flex items-center justify-center transition">
                                <i class="fas fa-trash text-xs"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Row 4 -->
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-500 to-pink-600 flex items-center justify-center text-white font-bold text-sm">
                                ع.م
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">علی محمدی</p>
                                <p class="text-xs text-gray-500">a.mohammadi@uni.af</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <span class="text-sm text-gray-700">مسئول رویدادها</span>
                    </td>
                    <td class="py-4 px-6">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                            <span class="w-1.5 h-1.5 bg-gray-500 rounded-full"></span>
                            غیرفعال
                        </span>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center justify-center gap-2">
                            <button class="w-7 h-7 rounded-lg bg-blue-50 hover:bg-blue-100 text-blue-600 flex items-center justify-center transition">
                                <i class="fas fa-edit text-xs"></i>
                            </button>
                            <button class="w-7 h-7 rounded-lg bg-red-50 hover:bg-red-100 text-red-600 flex items-center justify-center transition">
                                <i class="fas fa-trash text-xs"></i>
                            </button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

<!-- Compact Version -->
<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
    <div class="divide-y divide-gray-100">
        
        <!-- User Item 1 -->
        <div class="flex items-center justify-between p-4 hover:bg-gray-50 transition">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white font-bold text-sm">
                    م.ا
                </div>
                <div>
                    <p class="font-semibold text-gray-800 text-sm">محمد امینی</p>
                    <p class="text-xs text-gray-500">مدیر سیستم</p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">فعال</span>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-ellipsis-v text-sm"></i>
                </button>
            </div>
        </div>

        <!-- User Item 2 -->
        <div class="flex items-center justify-between p-4 hover:bg-gray-50 transition">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center text-white font-bold text-sm">
                    ن.ک
                </div>
                <div>
                    <p class="font-semibold text-gray-800 text-sm">ناهید کاظمی</p>
                    <p class="text-xs text-gray-500">کارشناس آموزش</p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">فعال</span>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-ellipsis-v text-sm"></i>
                </button>
            </div>
        </div>

        <!-- User Item 3 -->
        <div class="flex items-center justify-between p-4 hover:bg-gray-50 transition">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-teal-500 to-teal-600 flex items-center justify-center text-white font-bold text-sm">
                    ب.ن
                </div>
                <div>
                    <p class="font-semibold text-gray-800 text-sm">بهرام نوری</p>
                    <p class="text-xs text-gray-500">مسئول فارغان</p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">فعال</span>
                <button class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-ellipsis-v text-sm"></i>
                </button>
            </div>
        </div>

    </div>
</div>
@endsection