@extends('admin.layouts.adminLayout')
@section('admin_page_content')
    <div class="p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <h1 class="text-2xl font-bold text-gray-800">ویرایش دپارتمنت</h1>
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>
                    <p class="text-gray-500">ویرایش اطلاعات دپارتمنت {{ $department->name }}</p>
                </div>
                <!-- Meta Info -->
                <div class="flex items-center gap-4 text-sm">
                    <div class="flex items-center gap-2 text-gray-500 bg-white px-4 py-2 rounded-lg border border-gray-200">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>آخرین ویرایش: <b>{{ $department->updated_at->format('h:m:s Y/m/d') }}</b></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm">

            <!-- Form Header -->
            <div class="p-8 border-b border-gray-100">
                <div class="flex items-start gap-6">
                    <div class="flex-1">
                        <h2 class="text-xl font-bold text-gray-800 mb-1 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            اطلاعات اصلی دپارتمنت
                        </h2>
                        <p class="text-sm text-gray-500">فیلدهای دارای <span class="text-red-500">*</span> الزامی هستند</p>
                    </div>
                    <!-- Icon -->
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

            <form class="p-8 space-y-8">

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
                                نام دپارتمنت <span class="text-red-500">*</span>
                            </label>
                            <input name="name" type="text" value="{{ $department->name }}"
                                placeholder="مثال: هوش مصنوعی"
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
                                کد دپارتمنت <span class="text-red-500">*</span>
                            </label>
                            <input name="code" type="text" value="{{ $department->code }} "
                                placeholder="مثال: CS-AI-001"
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
                                پوهنخی مربوطه <span class="text-red-500">*</span>
                            </label>
                            <select name="faculty_id"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('faculty_id') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                                <option value="">انتخاب پوهنخی</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}"
                                        {{ $department->faculty_id == $faculty->id ? 'selected' : '' }}>
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

                <!-- Section 3: Contact & Location -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        موقعیت و تماس
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">موقعیت / اتاق</label>
                            <input name="location" type="text" value="{{ $department->location }}"
                                placeholder="مثال: ساختمان اصلی، اتاق ۲۵"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('location') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('location')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">شماره تماس دپارتمنت</label>
                            <input name="phone" type="tel" value="{{ $department->phone }}"
                                placeholder="020-XXXXXXX"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                {{ $errors->has('phone') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('phone')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">ایمیل دپارتمنت</label>
                            <input name="email" type="email" value="{{ $department->email }}"
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
                        <label class="block text-sm font-medium text-gray-700 mb-2">توضیحات دپارتمنت</label>
                        <textarea name="description" rows="4"
                            placeholder="توضیحات مختصر درباره دپارتمان، زمینه‌های فعالیت، اهداف و ماموریت‌ها..."
                            class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white resize-none
                            {{ $errors->has('description') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">{{ $department->description }}</textarea>
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
                                <option value="active" {{ $department->status === 'active' ? 'selected' : '' }}>فعال
                                </option>
                                <option value="inactive" {{ $department->status === 'inactive' ? 'selected' : '' }}>
                                    غیرفعال
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
                                    {{ $department->show_on_homepage ? 'checked' : '' }}
                                    class="w-5 h-5 text-primary rounded border-gray-300 focus:ring-primary">
                                <div>
                                    <span class="text-sm font-medium text-gray-700 block">نمایش در صفحه اصلی</span>
                                    <span class="text-xs text-gray-500">دپارتمان در لیست عمومی نمایش داده شود</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>



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
                        </div>
                        <div class="flex items-center gap-3">
                            <button type="submit"
                                class="px-6 py-3 bg-blue-800 text-white rounded-xl hover:bg-primary-dark transition-colors flex items-center gap-2 shadow-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>ذخیره تغییرات</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
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
