@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <div class="p-8">

        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center gap-2 mb-2">
                <h1 class="text-2xl font-bold text-gray-800">افزودن دپارتمان جدید</h1>
                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
            <p class="text-gray-500">اطلاعات دپارتمان جدید را وارد کنید</p>
        </div>

        {{-- ✅ Success Alert --}}
        @if (session('success'))
            <div id="alert-success"
                class="mb-6 flex items-start gap-3 bg-green-50 border border-green-200 text-green-800 rounded-xl p-4">
                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="flex-1">
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
                <button onclick="document.getElementById('alert-success').remove()"
                    class="text-green-400 hover:text-green-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif

        {{-- ❌ Validation Error Summary --}}
        @if ($errors->any())
            <div id="alert-error"
                class="mb-6 flex items-start gap-3 bg-red-50 border border-red-200 text-red-800 rounded-xl p-4">
                <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="flex-1">
                    <p class="font-medium mb-1">لطفاً خطاهای زیر را برطرف کنید:</p>
                    <ul class="list-disc list-inside space-y-1 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button onclick="document.getElementById('alert-error').remove()" class="text-red-400 hover:text-red-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif

        <!-- Form Container -->
        <form method="POST" action="{{ route('departments.store') }}"
            class="bg-white rounded-2xl border border-gray-200 shadow-sm">
            @csrf

            <!-- Form Header -->
            <div class="p-8 border-b border-gray-100">
                <div class="flex items-start gap-6">
                    <div class="flex-1">
                        <h2 class="text-xl font-bold text-gray-800 mb-1 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            اطلاعات اصلی دپارتمان
                        </h2>
                        <p class="text-sm text-gray-500">فیلدهای دارای <span class="text-red-500">*</span> الزامی هستند</p>
                    </div>
                    <div class="flex-shrink-0">
                        <div
                            class="w-24 h-24 bg-blue-50 rounded-xl flex items-center justify-center border-2 border-dashed border-blue-200">
                            <svg class="w-12 h-12 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-8 space-y-8">

                <!-- Section 1: Basic Information -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        اطلاعات پایه
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Department Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                نام دپارتمان <span class="text-red-500">*</span>
                            </label>
                            <input name="name" type="text" value="{{ old('name') }}" placeholder="مثال: هوش مصنوعی"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('name') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('name')
                                <p class="text-xs text-red-500 mt-1 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <!-- Department Code -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                کد دپارتمان <span class="text-red-500">*</span>
                            </label>
                            <input name="code" type="text" value="{{ old('code') }}" placeholder="مثال: CS-AI-001"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('code') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('code')
                                <p class="text-xs text-red-500 mt-1 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <!-- Faculty -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                دانشکده مربوطه <span class="text-red-500">*</span>
                            </label>
                            <select name="faculty_id"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('faculty_id') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                                <option value="">انتخاب دانشکده</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}"
                                        {{ old('faculty_id') == $faculty->id ? 'selected' : '' }}>
                                        {{ $faculty->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('faculty_id')
                                <p class="text-xs text-red-500 mt-1 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Section 2: Head of Department -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        اطلاعات رئیس دپارتمان
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Head Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                نام و تخلص رئیس <span class="text-red-500">*</span>
                            </label>
                            <input name="head_name" type="text" value="{{ old('head_name') }}"
                                placeholder="مثال: دکتر احمدی"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('head_name') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('head_name')
                                <p class="text-xs text-red-500 mt-1 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <!-- Head Degree -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">مدرک تحصیلی رئیس</label>
                            <select name="head_degree"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('head_degree') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                                <option value="">انتخاب کنید</option>
                                <option value="phd" {{ old('head_degree') === 'phd' ? 'selected' : '' }}>دکترا
                                    (PhD)</option>
                                <option value="master" {{ old('head_degree') === 'master' ? 'selected' : '' }}>ماستر
                                </option>
                                <option value="bachelor"{{ old('head_degree') === 'bachelor' ? 'selected' : '' }}>لیسانس
                                </option>
                            </select>
                            @error('head_degree')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Head Speciality -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">تخصص</label>
                            <input name="head_speciality" type="text" value="{{ old('head_speciality') }}"
                                placeholder="مثال: یادگیری ماشین"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('head_speciality') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('head_speciality')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Head Phone -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">شماره تماس رئیس</label>
                            <input name="head_phone" type="tel" value="{{ old('head_phone') }}"
                                placeholder="07XXXXXXXXX"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('head_phone') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('head_phone')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Head Email -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">ایمیل رئیس</label>
                            <input name="head_email" type="email" value="{{ old('head_email') }}"
                                placeholder="example@university.edu"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('head_email') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('head_email')
                                <p class="text-xs text-red-500 mt-1 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <!-- Head Start Year -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">سال شروع فعالیت</label>
                            <input name="head_start_year" type="text" value="{{ old('head_start_year') }}"
                                placeholder="مثال: ۱۳۹۵"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('head_start_year') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('head_start_year')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Section 3: Contact & Location -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        موقعیت و تماس
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">موقعیت / اتاق</label>
                            <input name="location" type="text" value="{{ old('location') }}"
                                placeholder="مثال: ساختمان اصلی، اتاق ۲۵"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('location') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('location')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">شماره تماس دپارتمان</label>
                            <input name="phone" type="tel" value="{{ old('phone') }}" placeholder="020-XXXXXXX"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('phone') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('phone')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">ایمیل دپارتمان</label>
                            <input name="email" type="email" value="{{ old('email') }}"
                                placeholder="department@university.edu"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('email') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('email')
                                <p class="text-xs text-red-500 mt-1 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
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
                        <label class="block text-sm font-medium text-gray-700 mb-2">توضیحات دپارتمان</label>
                        <textarea name="description" rows="4"
                            placeholder="توضیحات مختصر درباره دپارتمان، زمینه‌های فعالیت، اهداف و ماموریت‌ها..."
                            class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white resize-none
                            {{ $errors->has('description') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">{{ old('description') }}</textarea>
                        <p class="text-xs text-gray-400 mt-1">حداکثر ۵۰۰ کاراکتر</p>
                        @error('description')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
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
                            <label class="block text-sm font-medium text-gray-700 mb-2">وضعیت</label>
                            <select name="status"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('status') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                                <option value="active" {{ old('status', 'active') === 'active' ? 'selected' : '' }}>فعال
                                </option>
                                <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>غیرفعال
                                </option>
                            </select>
                            @error('status')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-end">
                            <label
                                class="flex items-center gap-3 cursor-pointer p-3 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors w-full">
                                <input type="checkbox" name="show_on_homepage" value="1"
                                    {{ old('show_on_homepage') ? 'checked' : '' }}
                                    class="w-5 h-5 text-primary rounded border-gray-300 focus:ring-primary">
                                <div>
                                    <span class="text-sm font-medium text-gray-700 block">نمایش در صفحه اصلی</span>
                                    <span class="text-xs text-gray-500">دپارتمان در لیست عمومی نمایش داده شود</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Form Actions -->
            <div class="border-t border-gray-100 p-6 bg-gray-50 rounded-b-2xl flex items-center justify-between">
                <a href="{{ route('departments.index') }}"
                    class="px-6 py-3 border border-gray-200 bg-white rounded-xl text-gray-600 hover:bg-gray-50 transition-colors flex items-center gap-2">
                    <span>انصراف</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <button type="submit"
                    class="px-6 py-3 bg-primary text-white rounded-xl bg-blue-800 hover:bg-blue-900 transition-colors flex items-center gap-2 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>ثبت دپارتمان</span>
                </button>
            </div>
        </form>

        <!-- Help Info -->
        <div class="mt-6 bg-blue-50 border border-blue-100 rounded-xl p-5 flex items-start gap-3">
            <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <p class="text-sm font-medium text-blue-800 mb-1">راهنما</p>
                <p class="text-sm text-blue-700">پس از ثبت دپارتمان، می‌توانید از بخش «ثبت فارغ جدید» فارغ‌التحصیلان این
                    دپارتمان را ثبت کنید. هر دپارتمان باید به یک دانشکده فعال متصل باشد.</p>
            </div>
        </div>
    </div>

    <script>
        setTimeout(() => {
            ['alert-success', 'alert-error'].forEach(id => {
                const el = document.getElementById(id);
                if (el) el.remove();
            });
        }, 5000);
    </script>
@endsection
