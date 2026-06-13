@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <main class="p-6">
        @if (session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 rounded-lg p-4 mb-4 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <form class="max-w-4xl" action="{{ route('removerole') }}" method="POST">
            @csrf
            <!-- User Selection -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                <h2 class="text-lg font-bold text-gray-800 mb-5 border-b border-gray-100 pb-3">حذف نقش از کاربر</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">انتخاب کاربر <span
                                class="text-red-500">*</span></label>
                        <select name="user_id" id="user-select" required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                            <option value="">انتخاب کنید</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}"
                                    {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                        <p class="text-xs text-gray-500 mt-1.5">کاربری که می‌خواهید نقش او را حذف کنید</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">انتخاب نقش <span
                                class="text-red-500">*</span></label>
                        <select name="role_id" id="role-select" required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                            <option value="">ابتدا کاربر را انتخاب کنید</option>
                        </select>
                        <p class="text-xs text-gray-500 mt-1.5">نقشی که از کاربر حذف خواهد شد</p>
                    </div>
                </div>
            </div>

            <!-- Current Roles List -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                <h2 class="text-lg font-bold text-gray-800 mb-5 border-b border-gray-100 pb-3">نقش‌های فعلی کاربر</h2>

                <div id="roles-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                    <p class="text-sm text-gray-500 col-span-full">ابتدا یک کاربر را انتخاب کنید تا نقش‌های او نمایش داده شود.</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-end gap-3">
                <a href="#"
                    class="px-6 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                    انصراف
                </a>
                <button type="submit"
                    class="px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white rounded-lg text-sm font-medium transition-colors shadow-sm flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9.5 7V4.5A1.5 1.5 0 0111 3h2a1.5 1.5 0 011.5 1.5V7" />
                    </svg>
                    حذف نقش
                </button>
            </div>
        </form>
    </main>


@endsection