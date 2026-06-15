@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <div class="p-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center gap-2 mb-2">
                <h1 class="text-2xl font-bold text-gray-800">افزودن پوهنخی جدید</h1>
                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
            <p class="text-gray-500">اطلاعات پوهنخی جدید را وارد کنید</p>
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
        <form method="POST" action="{{ route('facultes.store') }}" enctype="multipart/form-data"
            class="bg-white rounded-2xl border border-gray-200 shadow-sm">
            @csrf

            <!-- Form Header with Logo Upload -->
            <div class="p-8 border-b border-gray-100">
                <div class="flex items-start gap-6">
                    <div class="flex-1">
                        <h2 class="text-xl font-bold text-gray-800 mb-1 flex items-center gap-2">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            اطلاعات اصلی پوهنخی
                        </h2>
                        <p class="text-sm text-gray-500">فیلدهای دارای <span class="text-red-500">*</span> الزامی هستند</p>
                    </div>
                    <!-- Logo Upload -->
                    <div class="flex-shrink-0">
                        <label class="block">
                            <div id="logo-preview-wrapper"
                                class="w-24 h-24 bg-gray-50 border-2 border-dashed border-gray-300 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:border-primary hover:bg-primary/5 transition-colors group overflow-hidden">
                                <img id="logo-preview" src="#" alt="preview"
                                    class="hidden w-full h-full object-cover rounded-xl" />
                                <div id="logo-placeholder" class="flex flex-col items-center justify-center">
                                    <svg class="w-8 h-8 text-gray-400 group-hover:text-primary transition-colors"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-xs text-gray-500 mt-1">آپلود لوگو</span>
                                </div>
                            </div>
                            <input type="file" name="image" id="logo-input" class="hidden" accept="image/*">
                        </label>
                        @error('image')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
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
                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                نام پوهنخی <span class="text-red-500">*</span>
                            </label>
                            <input name="name" type="text" value="{{ old('name') }}"
                                placeholder="مثال: دانشکده علوم کامپیوتر"
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
                        <!-- Code -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                کد پوهنخی <span class="text-red-500">*</span>
                            </label>
                            <input name="code" type="text" value="{{ old('code') }}" placeholder="مثال: CS-001"
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
                    </div>
                </div>

                <!-- Section 2: Dean Information -->
                <div>
                    <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        اطلاعات رئیس پوهنخی
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                نام و تخلص رئیس <span class="text-red-500">*</span>
                            </label>
                            <input name="head_name" type="text" value="{{ old('head_name') }}"
                                placeholder="مثال: دکتر کاظم رحیمی"
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
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">شماره تماس رئیس</label>
                            <input name="head_phone" type="text" value="{{ old('head_phone') }}"
                                placeholder="example@university.edu"
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                    {{ $errors->has('head_phone') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
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
                            <label class="block text-sm font-medium text-gray-700 mb-2">موقعیت / ساختمان</label>
                            <input name="location" type="text" value="{{ old('location') }}"
                                placeholder="مثال: ساختمان اصلی، طبقه "
                                class="form-input w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white
                                    {{ $errors->has('location') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            @error('location')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">ایمیل پوهنخی</label>
                            <input name="email" type="email" value="{{ old('email') }}"
                                placeholder="faculty@university.edu"
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
                        <label class="block text-sm font-medium text-gray-700 mb-2">توضیحات پوهنخی</label>
                        <textarea name="description" rows="4"
                            placeholder="توضیحات مختصر درباره دانشکده، تاریخچه، اهداف و ماموریت‌ها..."
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
                    </div>
                </div>

            </div>

            <!-- Form Actions -->
            <div class="border-t border-gray-100 p-6 bg-gray-50 rounded-b-2xl flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <button type="submit"
                        class="px-6 py-3 bg-primary text-white rounded-xl bg-blue-800 transition-colors flex items-center gap-2 shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>ثبت پوهنخی</span>
                    </button>
                </div>
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
                <p class="text-sm text-blue-700">پس از ثبت پوهنخی می‌توانید از بخش «مدیریت دپارتمان‌ها» دپارتمان‌های
                    مربوط به این پوهنخی را اضافه کنید. اطلاعات پوهنخی در پروفایل فارغ‌التحصیلان نمایش داده خواهد شد.</p>
            </div>
        </div>
    </div>
@endsection

@push('page_script')
    <script>
        // Logo image preview
        document.getElementById('logo-input').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function(ev) {
                const preview = document.getElementById('logo-preview');
                const placeholder = document.getElementById('logo-placeholder');
                preview.src = ev.target.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            };
            reader.readAsDataURL(file);
        });

        // Auto-dismiss alerts after 5 seconds
        setTimeout(() => {
            ['alert-success', 'alert-error'].forEach(id => {
                const el = document.getElementById(id);
                if (el) el.remove();
            });
        }, 5000);
    </script>
@endpush
