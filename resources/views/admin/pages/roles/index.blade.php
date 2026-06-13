@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <!-- Page Content -->
    <main class="p-6">
        <!-- Page Header -->
        <div class="flex items-start justify-between mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800 mb-1">نقش‌ها و دسترسی‌ها</h1>
                <p class="text-sm text-gray-500">تعریف نقش‌ها و سطوح دسترسی کاربران سیستم</p>
            </div>
            <a href="{{ route('roles.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-medium transition-colors shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                نقش جدید
            </a>
        </div>

        <!-- Role Cards Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

            <!-- Card 1: System Admin -->
            <div class="role-card bg-white rounded-2xl border border-gray-200 p-6">
                <div class="flex items-start justify-between mb-5">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">مدیر سیستم</h3>
                        <p class="text-sm text-gray-500"> کاربر</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                        <button
                            class="p-1.5 text-gray-400 hover:text-blue-500 hover:bg-blue-50 rounded-lg transition-colors"
                            title="ویرایش">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">مشاهده همه</span>
                    <span
                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-xs font-medium bg-green-50 text-green-700 border border-green-200">ویرایش
                        همه</span>
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">حذف</span>
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">مدیریت کاربران</span>
                </div>
            </div>

            <!-- Card 2: Education Expert -->
            <div class="role-card bg-white rounded-2xl border border-gray-200 p-6">
                <div class="flex items-start justify-between mb-5">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">کارشناس آموزش</h3>
                        <p class="text-sm text-gray-500">۶ کاربر</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">مشاهده فارغان</span>
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">ویرایش فارغان</span>
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">مدیریت دپارتمنت‌ها</span>
                </div>
            </div>

            <!-- Card 3: Graduates Officer -->
            <div class="role-card bg-white rounded-2xl border border-gray-200 p-6">
                <div class="flex items-start justify-between mb-5">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">مسئول فارغان</h3>
                        <p class="text-sm text-gray-500">۴ کاربر</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">مشاهده فارغان</span>
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">ثبت فارغ جدید</span>
                </div>
            </div>

            <!-- Card 4: Report Expert -->
            <div class="role-card bg-white rounded-2xl border border-gray-200 p-6">
                <div class="flex items-start justify-between mb-5">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">کارشناس گزارش</h3>
                        <p class="text-sm text-gray-500">۳ کاربر</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">مشاهده گزارشات</span>
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">خروجی اکسل</span>
                </div>
            </div>

            <!-- Card 5: Events Officer -->
            <div class="role-card bg-white rounded-2xl border border-gray-200 p-6 lg:col-start-2">
                <div class="flex items-start justify-between mb-5">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">مسئول رویدادها</h3>
                        <p class="text-sm text-gray-500">۲ کاربر</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">مدیریت رویدادها</span>
                    <span class="permission-tag px-3 py-1.5 rounded-lg text-xs font-medium">مدیریت اطلاعیه‌ها</span>
                </div>
            </div>

        </div>
    </main>
@endsection
