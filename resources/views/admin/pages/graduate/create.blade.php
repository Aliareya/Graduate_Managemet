@extends('admin.layouts.adminLayout')
@section('admin_page_content')
    <div class="p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">ثبت فارغ جدید</h1>
            <p class="text-gray-500">لطفاً تمام اطلاعات مورد نیاز را در فرم زیر تکمیل نمایید.</p>
        </div>

        <!-- Form Container -->
        <form action="{{ route('graduates.store') }}" method="POST" id="graduateForm">
            @csrf
            <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm space-y-10">

                <!-- Section 1: Personal Information -->
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        اطلاعات شخصی
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                نام <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="first_name" required placeholder="نام"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                تخلص <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="last_name" required placeholder="تخلص"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                نام پدر
                            </label>
                            <input type="text" name="father_name" placeholder="نام پدر"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                جنسیت
                            </label>
                            <select name="gender"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                <option value="">انتخاب کنید</option>
                                <option value="male">مرد</option>
                                <option value="female">زن</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                تاریخ تولد
                            </label>
                            <div class="relative">
                                <input type="date" name="birth_date"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Contact Information -->
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        اطلاعات تماس
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                شماره تماس
                            </label>
                            <input type="tel" name="phone" placeholder="07XXXXXXXXX"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                ایمیل
                            </label>
                            <input type="email" name="email" placeholder="example@email.com"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                آدرس
                            </label>
                            <textarea name="address" rows="4" placeholder="آدرس کامل محل سکونت"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Section 3: Educational Information -->
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        </svg>
                        اطلاعات تحصیلی
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                شماره محصل <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="student_id" required placeholder="مثال: 14001234"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                دانشکده <span class="text-red-500">*</span>
                            </label>
                            <select name="faculty_id" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                <option value="">انتخاب دانشکده</option>
                                <option value="1">کامپیوتر ساینس</option>
                                <option value="2">اقتصاد</option>
                                <option value="3">انجنیری</option>
                                <option value="4">حقوق و علوم سیاسی</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                دپارتمنت
                            </label>
                            <select name="department_id"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                <option value="">ابتدا دانشکده انتخاب کنید</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                سال ورودی
                            </label>
                            <input type="text" name="entry_year" placeholder="مثال: ۱۳۹۸"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                سال فراغت <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="graduation_year" required placeholder="مثال: ۱۴۰۲"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                درجه تحصیلی
                            </label>
                            <select name="degree"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                <option value="">انتخاب کنید</option>
                                <option value="bachelor">لیسانس</option>
                                <option value="master">ماستر</option>
                                <option value="phd">دکترا</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Section 4: Employment Information -->
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b pb-4">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        اطلاعات شغلی
                    </h2>
                    
                    <!-- New Dropdown to trigger job inputs -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                آیا در حال حاضر شاغل هستید؟ <span class="text-red-500">*</span>
                            </label>
                            <select name="is_employed" id="is_employed" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                <option value="">انتخاب کنید</option>
                                <option value="yes">بلی، شاغل هستم</option>
                                <option value="no">نخیر (بیکار / ادامه تحصیل)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Job Details (Hidden by default) -->
                    <div id="job_details" class="grid grid-cols-1 md:grid-cols-3 gap-6 hidden">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                نام شرکت / اداره
                            </label>
                            <input type="text" name="company_name" placeholder="نام محل کار"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                سمت شغلی
                            </label>
                            <input type="text" name="job_title" placeholder="عنوان پوزیشن"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                محل کار
                            </label>
                            <input type="text" name="work_location" placeholder="ولایت / شهر"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                        </div>
                    </div>
                </div>

            </div>

            <!-- Action Buttons -->
            <div class="mt-8 flex items-center justify-end gap-4">
                <button type="button" onclick="window.history.back()"
                    class="px-6 py-3 border border-gray-200 rounded-xl text-gray-600 hover:bg-gray-50 transition-colors flex items-center gap-2">
                    <span>انصراف</span>
                </button>

                <button type="submit"
                    class="px-8 py-3 bg-primary text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm">
                    <span>ثبت نهایی فارغ‌التحصیل</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
@endsection

@push('page_script')
    <script>
        // Toggle job details based on employment status
        document.getElementById('is_employed').addEventListener('change', function() {
            const jobDetails = document.getElementById('job_details');
            
            if (this.value === 'yes') {
                jobDetails.classList.remove('hidden');
            } else {
                jobDetails.classList.add('hidden');
                // Clear inputs when hidden to avoid submitting old/empty data
                jobDetails.querySelectorAll('input').forEach(input => input.value = '');
            }
        });
    </script>
@endpush