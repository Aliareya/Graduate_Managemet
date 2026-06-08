@extends('admin.layouts.adminLayout')
@section('admin_page_content')
    <div class="p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center gap-2 mb-2">
                <h1 class="text-2xl font-bold text-gray-800">ثبت فارغ جدید</h1>
                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
            <p class="text-gray-500">مرحله <span id="currentStep">1</span> از 4 – <span id="stepName">اطلاعات شخصی</span>
            </p>
        </div>

        <!-- Progress Steps -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <!-- Step 1 -->
                <div class="flex flex-col items-center flex-1">
                    <div class="w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-active transition-all duration-300"
                        id="step1">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <span class="text-xs text-gray-600 font-medium">اطلاعات شخصی</span>
                </div>

                <!-- Connector -->
                <div class="flex-1 h-0.5 bg-gray-200 mx-2" id="connector1"></div>

                <!-- Step 2 -->
                <div class="flex flex-col items-center flex-1">
                    <div class="w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-inactive transition-all duration-300"
                        id="step2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <span class="text-xs text-gray-600 font-medium">اطلاعات تماس</span>
                </div>

                <!-- Connector -->
                <div class="flex-1 h-0.5 bg-gray-200 mx-2" id="connector2"></div>

                <!-- Step 3 -->
                <div class="flex flex-col items-center flex-1">
                    <div class="w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-inactive transition-all duration-300"
                        id="step3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        </svg>
                    </div>
                    <span class="text-xs text-gray-600 font-medium">اطلاعات تحصیلی</span>
                </div>

                <!-- Connector -->
                <div class="flex-1 h-0.5 bg-gray-200 mx-2" id="connector3"></div>

                <!-- Step 4 -->
                <div class="flex flex-col items-center flex-1">
                    <div class="w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-inactive transition-all duration-300"
                        id="step4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-xs text-gray-600 font-medium">اطلاعات شغلی</span>
                </div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm">

            <!-- Step 1: Personal Information -->
            <div id="formStep1" class="form-step">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
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
                        <input type="text" placeholder="نام"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            تخلص <span class="text-red-500">*</span>
                        </label>
                        <input type="text" placeholder="تخلص"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            نام پدر
                        </label>
                        <input type="text" placeholder="نام پدر"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            جنسیت
                        </label>
                        <select
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
                            <input type="date" placeholder="mm/dd/yyyy"
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

            <!-- Step 2: Contact Information -->
            <div id="formStep2" class="form-step hidden">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
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
                        <input type="tel" placeholder="07XXXXXXXXX"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            ایمیل
                        </label>
                        <input type="email" placeholder="example@email.com"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            آدرس
                        </label>
                        <textarea rows="4" placeholder="آدرس کامل محل سکونت"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"></textarea>
                    </div>
                </div>
            </div>

            <!-- Step 3: Educational Information -->
            <div id="formStep3" class="form-step hidden">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
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
                        <input type="text" placeholder="مثال: 14001234"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            دانشکده <span class="text-red-500">*</span>
                        </label>
                        <select
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
                        <select
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                            <option value="">ابتدا دانشکده انتخاب کنید</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            سال ورودی
                        </label>
                        <input type="text" placeholder="مثال: ۱۳۸"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            سال فراغت <span class="text-red-500">*</span>
                        </label>
                        <input type="text" placeholder="مثال: ۱۴۰۲"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            درجه تحصیلی
                        </label>
                        <select
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                            <option value="">انتخاب کنید</option>
                            <option value="bachelor">لیسانس</option>
                            <option value="master">ماستر</option>
                            <option value="phd">دکترا</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Step 4: Employment Information -->
            <div id="formStep4" class="form-step hidden">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    اطلاعات شغلی
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            وضعیت شغلی
                        </label>
                        <select
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                            <option value="">انتخاب کنید</option>
                            <option value="employed">شاغل</option>
                            <option value="unemployed">بیکار</option>
                            <option value="studying">ادامه تحصیل</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            نام شرکت / اداره
                        </label>
                        <input type="text" placeholder="نام محل کار"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            سمت شغلی
                        </label>
                        <input type="text" placeholder="عنوان پوزیشن"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                    <div class="md:col-span-3">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            محل کار
                        </label>
                        <input type="text" placeholder="ولایت / شهر"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                    </div>
                </div>

                <!-- Summary Box -->
                <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
                    <h3 class="text-sm font-bold text-gray-700 mb-4">خلاصه اطلاعات ثبت‌شده</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div>
                            <span class="text-gray-500">نام کامل:</span>
                            <span class="mr-2 font-medium text-gray-800">sssa saa</span>
                        </div>
                        <div>
                            <span class="text-gray-500">شماره محصل:</span>
                            <span class="mr-2 font-medium text-gray-800">kkk</span>
                        </div>
                        <div>
                            <span class="text-gray-500">دانشکده:</span>
                            <span class="mr-2 font-medium text-gray-800">علوم کامپیوتر</span>
                        </div>
                        <div>
                            <span class="text-gray-500">دپارتمنت:</span>
                            <span class="mr-2 font-medium text-gray-800">هوش مصنوعی</span>
                        </div>
                        <div>
                            <span class="text-gray-500">سال ورودی:</span>
                            <span class="mr-2 font-medium text-gray-800">78987</span>
                        </div>
                        <div>
                            <span class="text-gray-500">سال فراغت:</span>
                            <span class="mr-2 font-medium text-gray-800">erewqw</span>
                        </div>
                        <div>
                            <span class="text-gray-500">تماس:</span>
                            <span class="mr-2 font-medium text-gray-800">aA1234566543</span>
                        </div>
                        <div>
                            <span class="text-gray-500">درجه:</span>
                            <span class="mr-2 font-medium text-gray-800">لیسانس</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Navigation Buttons -->
        <div class="mt-8 flex items-center justify-between">
            <button id="cancelBtn"
                class="px-6 py-3 border border-gray-200 rounded-xl text-gray-600 hover:bg-gray-50 transition-colors flex items-center gap-2">
                <span>انصراف</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Progress Dots -->
            <div class="flex items-center gap-2">
                <div class="w-2.5 h-2.5 rounded-full bg-primary" id="dot1"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-gray-300" id="dot2"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-gray-300" id="dot3"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-gray-300" id="dot4"></div>
            </div>

            <button id="nextBtn"
                class="px-6 py-3 bg-primary text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm">
                <span>مرحله بعد</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="prevBtn"
                class="px-6 py-3 bg-primary text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm ">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span>مرحله قبل</span>
            </button>

            <button id="submitBtn"
                class="px-6 py-3 bg-primary text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm ">
                <span>ثبت نهایی</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </button>
        </div>
    </div>
@endsection
@push('page_script')
    <script>
        let currentStep = 1;
        const totalSteps = 4;

        const stepNames = {
            1: 'اطلاعات شخصی',
            2: 'اطلاعات تماس',
            3: 'اطلاعات تحصیلی',
            4: 'اطلاعات شغلی'
        };

        function updateSteps() {
            // Hide all steps
            for (let i = 1; i <= totalSteps; i++) {
                document.getElementById(`formStep${i}`).classList.add('hidden');
                document.getElementById(`step${i}`).className =
                    'w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-inactive transition-all duration-300';
                document.getElementById(`dot${i}`).className = 'w-2.5 h-2.5 rounded-full bg-gray-300';

                if (i < totalSteps) {
                    document.getElementById(`connector${i}`).className = 'flex-1 h-0.5 bg-gray-200 mx-2';
                }
            }

            // Show current step
            document.getElementById(`formStep${currentStep}`).classList.remove('hidden');

            // Update completed steps
            for (let i = 1; i < currentStep; i++) {
                document.getElementById(`step${i}`).className =
                    'w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-completed transition-all duration-300';
                document.getElementById(`dot${i}`).className = 'w-2.5 h-2.5 rounded-full bg-primary';

                if (i < totalSteps) {
                    document.getElementById(`connector${i}`).className = 'flex-1 h-0.5 bg-primary mx-2';
                }
            }

            // Update current step
            document.getElementById(`step${currentStep}`).className =
                'w-12 h-12 rounded-full border-2 flex items-center justify-center mb-2 step-active transition-all duration-300';
            document.getElementById(`dot${currentStep}`).className = 'w-2.5 h-2.5 rounded-full bg-primary';

            // Update header
            document.getElementById('currentStep').textContent = currentStep;
            document.getElementById('stepName').textContent = stepNames[currentStep];

            // Update buttons
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');
            const submitBtn = document.getElementById('submitBtn');
            const cancelBtn = document.getElementById('cancelBtn');

            if (currentStep === 1) {
                prevBtn.classList.add('hidden');
                cancelBtn.classList.remove('hidden');
            } else {
                prevBtn.classList.remove('hidden');
                cancelBtn.classList.add('hidden');
            }

            if (currentStep === totalSteps) {
                nextBtn.classList.add('hidden');
                submitBtn.classList.remove('hidden');
            } else {
                nextBtn.classList.remove('hidden');
                submitBtn.classList.add('hidden');
            }
        }

        document.getElementById('nextBtn').addEventListener('click', () => {
            if (currentStep < totalSteps) {
                currentStep++;
                updateSteps();
            }
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                updateSteps();
            }
        });

        document.getElementById('cancelBtn').addEventListener('click', () => {
            if (confirm('آیا مطمئن هستید که می‌خواهید انصراف دهید؟')) {
                window.location.href = '#';
            }
        });

        document.getElementById('submitBtn').addEventListener('click', () => {
            alert('اطلاعات با موفقیت ثبت شد!');
        });

        // Initialize
        updateSteps();
    </script>
@endpush
