@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <!-- Page Content -->
    <div class="p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center gap-2 mb-2">
                <h1 class="text-2xl font-bold text-gray-800">افزودن دانشکده جدید</h1>
                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
            <p class="text-gray-500">اطلاعات دانشکده جدید را وارد کنید</p>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm">

            <!-- Form Header with Logo Upload -->
            <div class="p-8 border-b border-gray-100">
                <div class="flex items-start gap-6">
                    <div class="flex-1">
                        <h2 class="text-xl font-bold text-gray-800 mb-1 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            اطلاعات اصلی دانشکده
                        </h2>
                        <p class="text-sm text-gray-500">فیلدهای دارای <span class="text-red-500">*</span> الزامی هستند</p>
                    </div>
                    <!-- Logo Upload -->
                    <div class="flex-shrink-0">
                        <label class="block">
                            <div
                                class="w-24 h-24 bg-gray-50 border-2 border-dashed border-gray-300 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:border-primary hover:bg-primary/5 transition-colors group">
                                <svg class="w-8 h-8 text-gray-400 group-hover:text-primary transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="text-xs text-gray-500 mt-1">آپلود لوگو</span>
                            </div>
                            <input type="file" class="hidden" accept="image/*">
                        </label>
                    </div>
                </div>
            </div>

            <form class="p-8 space-y-8">

                <!-- Section 1: Basic Information -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        اطلاعات پایه
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                نام دانشکده <span class="text-red-500">*</span>
                            </label>
                            <input type="text" placeholder="مثال: دانشکده علوم کامپیوتر"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                کد دانشکده <span class="text-red-500">*</span>
                            </label>
                            <input type="text" placeholder="مثال: CS-001"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                سال تاسیس
                            </label>
                            <input type="text" placeholder="مثال: ۱۳۵۰"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                    </div>
                </div>

                <!-- Section 2: Dean Information -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        اطلاعات رئیس دانشکده
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                نام و تخلص رئیس <span class="text-red-500">*</span>
                            </label>
                            <input type="text" placeholder="مثال: دکتر کاظم رحیمی"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                شماره تماس رئیس
                            </label>
                            <input type="tel" placeholder="07XXXXXXXXX"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                ایمیل رئیس
                            </label>
                            <input type="email" placeholder="example@university.edu"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                    </div>
                </div>

                <!-- Section 3: Location & Contact -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        موقعیت و تماس
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                موقعیت / ساختمان
                            </label>
                            <input type="text" placeholder="مثال: ساختمان اصلی، طبقه "
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                شماره تماس دانشکده
                            </label>
                            <input type="tel" placeholder="020-XXXXXXX"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                ایمیل دانشکده
                            </label>
                            <input type="email" placeholder="faculty@university.edu"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                    </div>
                </div>

                <!-- Section 4: Description -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        توضیحات
                    </h3>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            توضیحات دانشکده
                        </label>
                        <textarea rows="4" placeholder="توضیحات مختصر درباره دانشکده، تاریخچه، اهداف و ماموریت‌ها..."
                            class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white resize-none"></textarea>
                        <p class="text-xs text-gray-400 mt-1">حداکثر ۵۰۰ کاراکتر</p>
                    </div>
                </div>

                <!-- Section 5: Settings -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        تنظیمات
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                وضعیت
                            </label>
                            <select
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                                <option value="active">فعال</option>
                                <option value="inactive">غیرفعال</option>
                            </select>
                        </div>
                        <div class="flex items-end">
                            <label
                                class="flex items-center gap-3 cursor-pointer p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors w-full">
                                <input type="checkbox"
                                    class="w-5 h-5 text-primary rounded border-gray-300 focus:ring-primary">
                                <div>
                                    <span class="text-sm font-medium text-gray-700 block">نمایش در صفحه اصلی</span>
                                    <span class="text-xs text-gray-500">دانشکده در لیست عمومی نمایش داده شود</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

            </form>

            <!-- Form Actions -->
            <div class="border-t border-gray-100 p-6 bg-gray-50 rounded-b-2xl flex items-center justify-between">
                <button type="button"
                    class="px-6 py-3 border border-gray-200 bg-white rounded-xl text-gray-600 hover:bg-gray-50 transition-colors flex items-center gap-2">
                    <span>انصراف</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <div class="flex items-center gap-3">
                    <button type="button"
                        class="px-6 py-3 border border-gray-200 bg-white rounded-xl text-gray-600 hover:bg-gray-50 transition-colors flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>ذخیره پیش‌نویس</span>
                    </button>
                    <button type="submit"
                        class="px-6 py-3 bg-primary text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>ثبت دانشکده</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Help Info -->
        <div class="mt-6 bg-blue-50 border border-blue-100 rounded-xl p-5 flex items-start gap-3">
            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <p class="text-sm font-medium text-blue-800 mb-1">راهنما</p>
                <p class="text-sm text-blue-700">پس از ثبت دانشکده، می‌توانید از بخش «مدیریت دپارتمان‌ها» دپارتمان‌های
                    مربوط به این دانشکده را اضافه کنید. اطلاعات دانشکده در پروفایل فارغ‌التحصیلان نمایش داده خواهد شد.</p>
            </div>
        </div>
    </div>
@endsection
