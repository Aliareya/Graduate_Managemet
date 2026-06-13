@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <main class="p-6">
        @if (session('success'))
            <div
                style="
            background-color:#16a34a;
            color:#ffffff;
            border:1px solid #22c55e;
            border-radius:12px;
            padding:14px 16px;
            margin-bottom:16px;
            display:flex;
            align-items:center;
            gap:10px;
            box-shadow:0 10px 25px rgba(0,0,0,.15);
        ">
                <i class="fas fa-circle-check"></i>

                <span style="color:#ffffff;">
                    {{ session('success') }}
                </span>
            </div>
        @endif
        <form class="max-w-4xl" method="POST" action="{{ route('assignRole') }}">
            <!-- User & Role Selection -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                <h2 class="text-lg font-bold text-gray-800 mb-5 border-b border-gray-100 pb-3">اطلاعات کاربر</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">انتخاب کاربر <span
                                class="text-red-500">*</span></label>
                        <select name="user_id"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                            <option value="">انتخاب کنید</option>
                            @foreach ($users as $user)
                                <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                            @endforeach
                        </select>
                        <p class="text-xs text-gray-500 mt-1.5">کاربری که می‌خواهید نقش به او اختصاص یابد</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">انتخاب نقش <span
                                class="text-red-500">*</span></label>
                        <select name="role_id"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm">
                            <option value="">انتخاب کنید</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
                            @endforeach
                        </select>
                        <p class="text-xs text-gray-500 mt-1.5">نقشی که به کاربر اختصاص داده می‌شود</p>
                    </div>
                </div>
            </div>
            <!-- Action Buttons -->
            <div class="flex items-center justify-end gap-3">
                <a href="#"
                    class="px-6 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                    انصراف
                </a>
                <button type="submit"
                    class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm font-medium transition-colors shadow-sm flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    اختصاص نقش
                </button>
            </div>
        </form>
    </main>
@endsection
