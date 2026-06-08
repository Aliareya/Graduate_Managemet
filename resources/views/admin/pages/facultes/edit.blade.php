@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <!-- Page Content -->
    <div class="p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <h1 class="text-2xl font-bold text-gray-800">ویرایش دانشکده</h1>
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>
                    <p class="text-gray-500">ویرایش اطلاعات دانشکده علوم کامپیوتر</p>
                </div>
                <!-- Meta Info -->
                <div class="flex items-center gap-4 text-sm">
                    <div class="flex items-center gap-2 text-gray-500 bg-white px-4 py-2 rounded-lg border border-gray-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>آخرین ویرایش: ۱۴۰۳/۰۳/۱۵</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-500 bg-white px-4 py-2 rounded-lg border border-gray-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span>ویرایشگر: محمد امینی</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm">

            <!-- Form Header with Logo -->
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
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <label class="block">
                            <div
                                class="w-24 h-24 bg-blue-50 border-2 border-dashed border-blue-200 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:border-primary hover:bg-primary/5 transition-colors group relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-100 to-blue-50 opacity-50"></div>
                                <svg class="w-10 h-10 text-primary relative z-10" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-primary/90 text-white text-xs py-1 text-center opacity-0 group-hover:opacity-100 transition-opacity z-20">
                                    تغییر لوگو
                                </div>
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
                            <input type="text" value="دانشکده علوم کامپیوتر"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                کد دانشکده <span class="text-red-500">*</span>
                            </label>
                            <input type="text" value="CS-001"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                سال تاسیس
                            </label>
                            <input type="text" value="۱۳۰"
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
                            <input type="text" value="دکتر کاظم رحیمی"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                شماره تماس رئیس
                            </label>
                            <input type="tel" value="0799123456"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                ایمیل رئیس
                            </label>
                            <input type="email" value="rahimi@university.edu"
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
                            <input type="text" value="ساختمان اصلی، طبقه دوم"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                شماره تماس دانشکده
                            </label>
                            <input type="tel" value="020-2345678"
                                class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                ایمیل دانشکده
                            </label>
                            <input type="email" value="cs@university.edu"
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
                        <textarea rows="4"
                            class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white resize-none">دانشکده علوم کامپیوتر با هدف تربیت متخصصان حوزه فناوری اطلاعات و علوم رایانه تاسیس شده است. این دانشکده دارای ۶ دپارتمان فعال در زمینه‌های مختلف از جمله هوش مصنوعی، شبکه‌های کامپیوتری، پایگاه داده و مهندسی نرم‌افزار می‌باشد.</textarea>
                        <div class="flex items-center justify-between mt-1">
                            <p class="text-xs text-gray-400">حداکثر ۵۰۰ کاراکتر</p>
                            <p class="text-xs text-gray-400"><span id="charCount">۲۸۵</span> کاراکتر</p>
                        </div>
                    </div>
                </div>

                <!-- Section 5: Statistics (Read-only) -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-gray-400 rounded-full"></span>
                        آمار دانشکده (فقط خواندنی)
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div class="bg-blue-50 rounded-xl p-4 border border-blue-100">
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <span class="text-xs text-gray-600">تعداد دپارتمان‌ها</span>
                            </div>
                            <p class="text-2xl font-bold text-gray-800">۶</p>
                        </div>
                        <div class="bg-green-50 rounded-xl p-4 border border-green-100">
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-xs text-gray-600">تعداد فارغان</span>
                            </div>
                            <p class="text-2xl font-bold text-gray-800">۲,۱۴۳</p>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-4 border border-purple-100">
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <span class="text-xs text-gray-600">تعداد اساتید</span>
                            </div>
                            <p class="text-2xl font-bold text-gray-800">۴۸</p>
                        </div>
                        <div class="bg-orange-50 rounded-xl p-4 border border-orange-100">
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                <span class="text-xs text-gray-600">دانشجویان فعال</span>
                            </div>
                            <p class="text-2xl font-bold text-gray-800">۱,۲۵۶</p>
                        </div>
                    </div>
                </div>

                <!-- Section 6: Settings -->
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
                                <option value="active" selected>فعال</option>
                                <option value="inactive">غیرفعال</option>
                            </select>
                        </div>
                        <div class="flex items-end">
                            <label
                                class="flex items-center gap-3 cursor-pointer p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors w-full">
                                <input type="checkbox" checked
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
            <div class="border-t border-gray-100 p-6 bg-gray-50 rounded-b-2xl">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <button type="button"
                            class="px-6 py-3 border border-gray-200 bg-white rounded-xl text-gray-600 hover:bg-gray-50 transition-colors flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                            <span>انصراف</span>
                        </button>
                        <button type="button"
                            class="px-6 py-3 border border-red-200 bg-white rounded-xl text-red-600 hover:bg-red-50 transition-colors flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            <span>حذف دانشکده</span>
                        </button>
                    </div>
                    <div class="flex items-center gap-3">
                        <button type="button"
                            class="px-6 py-3 border border-gray-200 bg-white rounded-xl text-gray-600 hover:bg-gray-50 transition-colors flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>ذخیره پیش‌نویس</span>
                        </button>
                        <button type="submit"
                            class="px-6 py-3 bg-primary text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>ذخیره تغییرات</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Help Info -->
        <div class="mt-6 bg-amber-50 border border-amber-100 rounded-xl p-5 flex items-start gap-3">
            <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <div>
                <p class="text-sm font-medium text-amber-800 mb-1">توجه</p>
                <p class="text-sm text-amber-700">تغییرات اعمال شده در اطلاعات دانشکده بلافاصله در پروفایل فارغ‌التحصیلان و
                    صفحات عمومی نمایش داده می‌شود. در صورت نیاز به بازگردانی اطلاعات قبلی، با مدیر سیستم تماس بگیرید.</p>
            </div>
        </div>
    </div>
@endsection

@push('page_script')
    <script>
        // Character counter for textarea
        const textarea = document.querySelector('textarea');
        const charCount = document.getElementById('charCount');

        textarea.addEventListener('input', function() {
            const count = this.value.length;
            charCount.textContent = count.toLocaleString('fa-IR');

            if (count > 500) {
                this.classList.add('border-red-500');
            } else {
                this.classList.remove('border-red-500');
            }
        });

        // Highlight changed fields
        const inputs = document.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                this.classList.add('changed-field');
            });
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('تغییرات با موفقیت ذخیره شد!');
        });
    </script>
@endpush
