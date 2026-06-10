@extends('admin.layouts.adminLayout')

@section('admin_page_content')
     <main class="p-6">
            <form class="max-w-5xl">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    
                    <!-- Left Column - Avatar & Quick Info -->
                    <div class="lg:col-span-1 space-y-6">


                        <!-- Account Status -->
                        <div class="bg-white rounded-2xl border border-gray-200 p-6">
                            <h3 class="text-sm font-bold text-gray-800 mb-4">وضعیت حساب</h3>
                            
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">نوع حساب</span>
                                    <span class="px-2.5 py-1 bg-blue-100 text-blue-700 rounded-md text-xs font-medium">مدیر سیستم</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">وضعیت</span>
                                    <span class="flex items-center gap-1.5 text-sm text-green-600">
                                        <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                        فعال
                                    </span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">تاریخ عضویت</span>
                                    <span class="text-sm text-gray-800">۱۵ فروردین ۱۴۰۱</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">آخرین ورود</span>
                                    <span class="text-sm text-gray-800">امروز، ۱۰:۳۰</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Forms -->
                    <div class="lg:col-span-2 space-y-6">
                        
                        <!-- Personal Information -->
                        <div class="bg-white rounded-2xl border border-gray-200 p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-bold text-gray-800">اطلاعات شخصی</h3>
                                <span class="text-xs text-gray-500">بخش ۱ از ۳</span>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">نام <span class="text-red-500">*</span></label>
                                    <input type="text" value="محمد" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">نام خانوادگی <span class="text-red-500">*</span></label>
                                    <input type="text" value="امینی" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">نام پدر</label>
                                    <input type="text" value="علی" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">کد ملی</label>
                                    <input type="text" value="۱۲۳۴۵۶۷۸۹۰" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">تاریخ تولد</label>
                                    <input type="text" value="۱۳۷۰/۰۵/۱۵" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm" placeholder="YYYY/MM/DD">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">جنسیت</label>
                                    <select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                                        <option value="male" selected>مرد</option>
                                        <option value="female">زن</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="bg-white rounded-2xl border border-gray-200 p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-bold text-gray-800">اطلاعات تماس</h3>
                                <span class="text-xs text-gray-500">بخش ۲ از ۳</span>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">ایمیل <span class="text-red-500">*</span></label>
                                    <input type="email" value="alireza.ebrahimi@uni.af" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm" dir="ltr">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">شماره تماس اصلی</label>
                                    <input type="text" value="+93 70 123 4567" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm" dir="ltr">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">شماره تماس دوم</label>
                                    <input type="text" value="+93 79 987 6543" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm" dir="ltr">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">آدرس</label>
                                    <textarea rows="3" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm" placeholder="آدرس کامل...">کابل، ناحیه ۱۰، سرک شهید مزاری، کوچه ۵</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Professional Information -->
                        <div class="bg-white rounded-2xl border border-gray-200 p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-bold text-gray-800">اطلاعات شغلی</h3>
                                <span class="text-xs text-gray-500">بخش ۳ از ۳</span>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">نام کاربری <span class="text-red-500">*</span></label>
                                    <input type="text" value="m.amini" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm" dir="ltr">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">سمت سازمانی</label>
                                    <input type="text" value="مدیر سیستم" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">دپارتمنت</label>
                                    <select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                                        <option value="it" selected>فناوری اطلاعات</option>
                                        <option value="admin">اداری</option>
                                        <option value="academic">آموزشی</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">شماره کارمندی</label>
                                    <input type="text" value="EMP-2021-001" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm" dir="ltr">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">درباره من</label>
                                    <textarea rows="4" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm" placeholder="توضیحات مختصر درباره خودتان...">مدیر سیستم با بیش از ۵ سال تجربه در مدیریت سامانه‌های دانشگاهی و پایگاه‌های داده. علاقه‌مند به تکنولوژی‌های جدید و توسعه نرم‌افزار.</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center justify-between gap-3 pt-4">
                            <button type="button" class="px-6 py-2.5 border border-red-300 text-red-600 rounded-lg text-sm font-medium hover:bg-red-50 transition-colors">
                                انصراف و بازگشت
                            </button>
                            <div class="flex items-center gap-3">
                                <button type="button" class="px-6 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                                    پیش‌نمایش
                                </button>
                                <button type="submit" class="px-8 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm font-medium transition-colors shadow-sm flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    ذخیره تغییرات
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
@endsection