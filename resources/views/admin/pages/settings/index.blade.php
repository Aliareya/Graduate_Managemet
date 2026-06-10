@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <main class="p-6">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-1">تنظیمات سیستم</h1>
            <p class="text-sm text-gray-500">پیکربندی عمومی سامانه مدیریت فارغان</p>
        </div>

        <form class="max-w-4xl space-y-6">

            <!-- Section 1: University Information -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-6">اطلاعات دانشگاه</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">نام دانشگاه</label>
                        <input type="text" value="دانشگاه ملی"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">آدرس</label>
                        <input type="text" value="کابل، ناحیه ۳، سرک دانشگاه"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">ایمیل پشتیبانی</label>
                        <input type="email" value="support@uni.af"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm"
                            dir="ltr">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">شماره تماس</label>
                        <input type="text" value="+93 20 000 0000"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm"
                            dir="ltr">
                    </div>
                </div>
            </div>

            <!-- Section 2: Notification Settings -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-6">تنظیمات اطلاع‌رسانی</h2>

                <div class="space-y-0">
                    <!-- Toggle 1: Email Notifications -->
                    <div class="flex items-center justify-between py-5 border-b border-gray-100">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 text-sm mb-1">ارسال اطلاعیه از طریق ایمیل</h3>
                            <p class="text-xs text-gray-500">ارسال خودکار اطلاعیه‌ها به ایمیل فارغان</p>
                        </div>
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>

                    <!-- Toggle 2: SMS -->
                    <div class="flex items-center justify-between py-5 border-b border-gray-100">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 text-sm mb-1">ارسال پیامک</h3>
                            <p class="text-xs text-gray-500">ارسال پیام‌های مهم از طریق پیامک</p>
                        </div>
                        <label class="toggle-switch">
                            <input type="checkbox">
                            <span class="toggle-slider"></span>
                        </label>
                    </div>

                    <!-- Toggle 3: Event Reminders -->
                    <div class="flex items-center justify-between py-5">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 text-sm mb-1">یادآور رویدادها</h3>
                            <p class="text-xs text-gray-500">ارسال یادآور پیش از برگزاری رویداد</p>
                        </div>
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Section 3: System Settings -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-6">تنظیمات سامانه</h2>

                <div class="space-y-0">
                    <!-- Toggle 1: Public Registration -->
                    <div class="flex items-center justify-between py-5 border-b border-gray-100">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 text-sm mb-1">فعال‌سازی ثبت‌نام عمومی فارغان</h3>
                            <p class="text-xs text-gray-500">اجازه ثبت اطلاعات توسط خود فارغ‌التحصیل</p>
                        </div>
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>

                    <!-- Toggle 2: Public Stats -->
                    <div class="flex items-center justify-between py-5 border-b border-gray-100">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 text-sm mb-1">نمایش آمار عمومی در صفحه اصلی</h3>
                            <p class="text-xs text-gray-500">نمایش آمار کلی به بازدیدکنندگان</p>
                        </div>
                        <label class="toggle-switch">
                            <input type="checkbox">
                            <span class="toggle-slider"></span>
                        </label>
                    </div>

                    <!-- Toggle 3: Maintenance Mode -->
                    <div class="flex items-center justify-between py-5">
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 text-sm mb-1">حالت تعمیر و نگهداری</h3>
                            <p class="text-xs text-gray-500">غیرفعال‌سازی موقت سامانه برای کاربران</p>
                        </div>
                        <label class="toggle-switch">
                            <input type="checkbox">
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-3">
                <button type="button"
                    class="px-6 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors bg-white">
                    بازنشانی
                </button>
                <button type="submit"
                    class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm font-medium transition-colors shadow-sm">
                    ذخیره تغییرات
                </button>
            </div>

        </form>
    </main>
@endsection
