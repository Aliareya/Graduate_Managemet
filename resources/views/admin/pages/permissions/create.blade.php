@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <main class="p-6">
        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 rounded-lg p-4 mb-4 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('admin.layouts.popup')

        <form class="max-w-3xl" action="{{ route('permission.store') }}" method="POST">
            @csrf
            <!-- Basic Info Section -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                <h2 class="text-lg font-bold text-gray-800 mb-5 border-b border-gray-100 pb-3">ایجاد دسترسی جدید</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">نام دسترسی (سیستمی) <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm"
                            placeholder="مثال: graduates.create">
                        <p class="text-xs text-gray-500 mt-1.5">نام یکتا که در کد برای بررسی دسترسی استفاده می‌شود (بدون فاصله، انگلیسی)</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">عنوان نمایشی <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="label" value="{{ old('label') }}" required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm"
                            placeholder="مثال: افزودن فارغ جدید">
                        <p class="text-xs text-gray-500 mt-1.5">عنوانی که برای کاربر فارسی نمایش داده می‌شود</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">دسته بندی دسترسی <span
                                class="text-red-500">*</span></label>
                        <select name="category" required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                            <option value="">انتخاب کنید</option>
                            <option value="graduates" {{ old('group') == 'graduates' ? 'selected' : '' }}>مدیریت فارغان</option>
                            <option value="university" {{ old('group') == 'university_structure' ? 'selected' : '' }}>ساختار دانشگاه</option>
                            <option value="users" {{ old('group') == 'users' ? 'selected' : '' }}>مدیریت کاربران</option>
                        </select>
                        <p class="text-xs text-gray-500 mt-1.5">گروهی که این دسترسی در آن نمایش داده می‌شود</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">توضیحات</label>
                        <input type="text" name="description" value="{{ old('description') }}"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm"
                            placeholder="توضیحات مختصر درباره این دسترسی">
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-end gap-3">
                <a href=""
                    class="px-6 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                    انصراف
                </a>
                <button type="submit"
                    class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm font-medium transition-colors shadow-sm flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    ایجاد دسترسی
                </button>
            </div>
        </form>
    </main>
@endsection