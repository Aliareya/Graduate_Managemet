@extends('admin.layouts.adminLayout')

@section('admin_page_content')
     <main class="p-6">
            <form class="max-w-4xl">
                <!-- Basic Info Section -->
                <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                    <h2 class="text-lg font-bold text-gray-800 mb-5 border-b border-gray-100 pb-3">اطلاعات پایه</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">نام نقش <span class="text-red-500">*</span></label>
                            <input type="text" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm" placeholder="مثال: کارشناس آموزش">
                            <p class="text-xs text-gray-500 mt-1.5">نام یکتا و توصیفی برای این نقش انتخاب کنید</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">توضیحات</label>
                            <input type="text" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm" placeholder="توضیحات مختصر درباره وظایف این نقش">
                        </div>
                    </div>
                </div>

                <!-- Permissions Section -->
                <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                    <div class="flex items-center justify-between mb-5 border-b border-gray-100 pb-3">
                        <h2 class="text-lg font-bold text-gray-800">دسترسی‌ها و مجوزها</h2>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" class="checkbox-custom w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm font-medium text-gray-700">انتخاب همه</span>
                        </label>
                    </div>

                    <!-- Permission Group 1: Graduates Management -->
                    <div class="permission-group p-4 rounded-xl border border-gray-200 mb-4">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">مدیریت فارغان</h3>
                                    <p class="text-xs text-gray-500">دسترسی‌های مربوط به فارغ‌التحصیلان</p>
                                </div>
                            </div>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="checkbox-custom w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm font-medium text-gray-700">همه دسترسی‌ها</span>
                            </label>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">مشاهده لیست فارغان</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">مشاهده جزئیات</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">افزودن فارغ جدید</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">ویرایش اطلاعات</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">حذف فارغ</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">خروجی اکسل</span>
                            </label>
                        </div>
                    </div>

                    <!-- Permission Group 2: University Structure -->
                    <div class="permission-group p-4 rounded-xl border border-gray-200 mb-4">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">ساختار دانشگاه</h3>
                                    <p class="text-xs text-gray-500">مدیریت دانشکده‌ها و دپارتمنت‌ها</p>
                                </div>
                            </div>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="checkbox-custom w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm font-medium text-gray-700">همه دسترسی‌ها</span>
                            </label>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">مشاهده دانشکده‌ها</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">مدیریت دپارتمنت‌ها</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">افزودن دانشکده جدید</span>
                            </label>
                        </div>
                    </div>

                    <!-- Permission Group 3: Reports -->
                    <div class="permission-group p-4 rounded-xl border border-gray-200 mb-4">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">گزارشات و آمار</h3>
                                    <p class="text-xs text-gray-500">دسترسی به گزارش‌ها و تحلیل‌ها</p>
                                </div>
                            </div>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="checkbox-custom w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm font-medium text-gray-700">همه دسترسی‌ها</span>
                            </label>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">مشاهده گزارشات</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">خروجی اکسل</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">تحلیل و آمار پیشرفته</span>
                            </label>
                        </div>
                    </div>

                    <!-- Permission Group 4: Users Management -->
                    <div class="permission-group p-4 rounded-xl border border-gray-200 mb-4">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">مدیریت کاربران</h3>
                                    <p class="text-xs text-gray-500">دسترسی به مدیریت کاربران سیستم</p>
                                </div>
                            </div>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="checkbox-custom w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm font-medium text-gray-700">همه دسترسی‌ها</span>
                            </label>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">مشاهده کاربران</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">افزودن کاربر جدید</span>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                <input type="checkbox" class="checkbox-custom w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm text-gray-700">ویرایش کاربران</span>
                            </label>
                        </div>
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-end gap-3">
                    <a href="#" class="px-6 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                        انصراف
                    </a>
                    <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm font-medium transition-colors shadow-sm flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        ایجاد نقش
                    </button>
                </div>
            </form>
        </main>
@endsection