@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <main class="p-6" dir="rtl">

        {{-- Page Header --}}
        <div class="max-w-4xl mb-6">
            <div class="flex items-center gap-3 mb-1">
                <a href="{{ route('roles.index') }}" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
                <h1 class="text-xl font-bold text-gray-800">ویرایش نقش: <span
                        class="text-blue-600">{{ $role->name }}</span></h1>
            </div>
            <p class="text-sm text-gray-500 mr-8">تغییرات در دسترسی‌ها بلافاصله برای همه کاربران این نقش اعمال می‌شود.</p>
        </div>

        <form method="POST" action="{{ route('roles.update', $role->id) }}" class="max-w-4xl" id="roleForm">
            @csrf
            @method('PUT')

            {{-- Validation Errors --}}
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-red-700 mb-1">لطفاً خطاهای زیر را برطرف کنید:</p>
                            <ul class="text-sm text-red-600 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>• {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Success Message --}}
            @if (session('success'))
                <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-6 flex items-center gap-3">
                    <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-sm text-green-700">{{ session('success') }}</p>
                </div>
            @endif

            {{-- Basic Info Section --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                <h2 class="text-base font-bold text-gray-800 mb-5 border-b border-gray-100 pb-3 flex items-center gap-2">
                    <span class="w-1 h-5 bg-blue-500 rounded-full inline-block"></span>
                    اطلاعات پایه
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            نام نقش <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name', $role->name) }}"
                            class="w-full px-4 py-2.5 border @error('name') border-red-400 bg-red-50 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm transition-colors"
                            placeholder="نام نقش را وارد کنید" required>
                        @error('name')
                            <p class="text-xs text-red-500 mt-1.5 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">توضیحات</label>
                        <input type="text" name="description" value="{{ old('description', $role->description ?? '') }}"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm transition-colors"
                            placeholder="توضیحات مختصر (اختیاری)">
                    </div>
                </div>
            </div>

            {{-- Permissions Section --}}
            <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                <div class="flex items-center justify-between mb-5 border-b border-gray-100 pb-3">
                    <h2 class="text-base font-bold text-gray-800 flex items-center gap-2">
                        <span class="w-1 h-5 bg-blue-500 rounded-full inline-block"></span>
                        دسترسی‌ها و مجوزها
                    </h2>
                    <label class="flex items-center gap-2 cursor-pointer select-none group">
                        <div class="relative">
                            <input type="checkbox" id="select-all" class="sr-only peer">
                            <div
                                class="w-5 h-5 rounded border-2 border-gray-300 peer-checked:bg-blue-600 peer-checked:border-blue-600 transition-colors flex items-center justify-center">
                                <svg class="w-3 h-3 text-white hidden peer-checked:block" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-gray-700">انتخاب همه</span>
                    </label>
                </div>

                {{-- Dynamic Permission Groups --}}
                @php
                    $categoryIcons = [
                        'graduates' => [
                            'color' => 'blue',
                            'svg' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>',
                        ],
                        'structure' => [
                            'color' => 'green',
                            'svg' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
                        ],
                        'reports' => [
                            'color' => 'purple',
                            'svg' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>',
                        ],
                        'users' => [
                            'color' => 'red',
                            'svg' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>',
                        ],
                        'settings' => [
                            'color' => 'yellow',
                            'svg' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>',
                        ],
                        'default' => [
                            'color' => 'gray',
                            'svg' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>',
                        ],
                    ];

                    $rolePermissionIds = $role->permissions->pluck('id')->toArray();
                @endphp

                @forelse ($permissions as $category => $categoryPermissions)
                    @php
                        $icon = $categoryIcons[$category] ?? $categoryIcons['default'];
                        $color = $icon['color'];
                        $groupCheckedCount = collect($categoryPermissions)
                            ->filter(fn($p) => in_array($p->id, $rolePermissionIds))
                            ->count();
                        $groupTotal = count($categoryPermissions);
                        $allGroupChecked = $groupCheckedCount === $groupTotal;
                    @endphp

                    <div class="permission-group p-4 rounded-xl border border-gray-200 mb-4 last:mb-0"
                        data-group="{{ $category }}">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-{{ $color }}-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-{{ $color }}-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        {!! $icon['svg'] !!}
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">{{ $category }}</h3>
                                    <p class="text-xs text-gray-500">
                                        <span class="group-checked-count">{{ $groupCheckedCount }}</span> از
                                        {{ $groupTotal }} دسترسی فعال
                                    </p>
                                </div>
                            </div>
                            <label class="flex items-center gap-2 cursor-pointer select-none">
                                <div class="relative">
                                    <input type="checkbox" class="group-select-all sr-only peer"
                                        data-group="{{ $category }}" {{ $allGroupChecked ? 'checked' : '' }}>
                                    <div
                                        class="w-5 h-5 rounded border-2 border-gray-300 peer-checked:bg-blue-600 peer-checked:border-blue-600 transition-colors flex items-center justify-center">
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="text-sm font-medium text-gray-700">همه دسترسی‌ها</span>
                            </label>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                            @foreach ($categoryPermissions as $permission)
                                <label
                                    class="permission-item flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-blue-50 hover:border-blue-200 transition-colors"
                                    data-group="{{ $category }}">
                                    <div class="relative flex-shrink-0">
                                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                            class="permission-checkbox sr-only peer" data-group="{{ $category }}"
                                            {{ in_array($permission->id, $rolePermissionIds) ? 'checked' : '' }}>
                                        <div
                                            class="w-4 h-4 rounded border-2 border-gray-300 peer-checked:bg-blue-600 peer-checked:border-blue-600 transition-colors flex items-center justify-center">
                                            <svg class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                    </div>
                                    <span
                                        class="text-sm text-gray-700 leading-tight">{{ $permission->display_name ?? $permission->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @empty
                    <div class="text-center py-12 text-gray-400">
                        <svg class="w-12 h-12 mx-auto mb-3 opacity-50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <p class="text-sm">هیچ دسترسی‌ای یافت نشد.</p>
                    </div>
                @endforelse

                {{-- Live permission counter --}}
                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="text-xs text-gray-400">
                        مجموع دسترسی‌های انتخاب‌شده:
                        <strong class="text-gray-600" id="total-selected">{{ count($rolePermissionIds) }}</strong>
                        از {{ $permissions->flatten()->count() }}
                    </span>
                    <button type="button" id="clear-all"
                        class="text-xs text-red-400 hover:text-red-600 transition-colors">
                        پاک‌کردن همه
                    </button>
                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2 text-xs text-gray-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    آخرین تغییر: {{ $role->updated_at?->diffForHumans() ?? '—' }}
                </div>
                <div class="flex items-center gap-3">
                    <a href="{{ route('roles.index') }}"
                        class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                        انصراف
                    </a>
                    <button type="submit"
                        class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white rounded-lg text-sm font-medium transition-colors shadow-sm flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        ذخیره تغییرات
                    </button>
                </div>
            </div>
        </form>
    </main>

    
@endsection

@push('page_script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectAll = document.getElementById('select-all');
            const clearAll = document.getElementById('clear-all');
            const totalDisplay = document.getElementById('total-selected');

            // ── Helpers ───────────────────────────────────────────────────────────────

            function getPermissionsInGroup(group) {
                return document.querySelectorAll(`.permission-checkbox[data-group="${group}"]`);
            }

            function updateGroupHeader(group) {
                const checkboxes = getPermissionsInGroup(group);
                const checked = [...checkboxes].filter(c => c.checked).length;
                const total = checkboxes.length;
                const groupSelect = document.querySelector(`.group-select-all[data-group="${group}"]`);
                const countSpan = document.querySelector(
                    `.permission-group[data-group="${group}"] .group-checked-count`);

                if (groupSelect) groupSelect.checked = (checked === total && total > 0);
                if (countSpan) countSpan.textContent = checked;
            }

            function updateGlobalHeader() {
                const all = document.querySelectorAll('.permission-checkbox');
                const checked = [...all].filter(c => c.checked).length;
                if (selectAll) selectAll.checked = (checked === all.length && all.length > 0);
                if (totalDisplay) totalDisplay.textContent = checked;
            }

            function refreshAll() {
                document.querySelectorAll('.group-select-all').forEach(btn => {
                    updateGroupHeader(btn.dataset.group);
                });
                updateGlobalHeader();
            }

            // ── Individual permission checkboxes ──────────────────────────────────────

            document.querySelectorAll('.permission-checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    updateGroupHeader(this.dataset.group);
                    updateGlobalHeader();
                });
            });

            // ── Group "select all" toggles ────────────────────────────────────────────

            document.querySelectorAll('.group-select-all').forEach(groupCheckbox => {
                groupCheckbox.addEventListener('change', function() {
                    const group = this.dataset.group;
                    getPermissionsInGroup(group).forEach(c => {
                        c.checked = this.checked;
                    });
                    updateGroupHeader(group);
                    updateGlobalHeader();
                });
            });

            // ── Global "select all" ───────────────────────────────────────────────────

            if (selectAll) {
                selectAll.addEventListener('change', function() {
                    document.querySelectorAll('.permission-checkbox').forEach(c => {
                        c.checked = this.checked;
                    });
                    refreshAll();
                });
            }

            // ── Clear all ─────────────────────────────────────────────────────────────

            if (clearAll) {
                clearAll.addEventListener('click', function() {
                    document.querySelectorAll('.permission-checkbox').forEach(c => {
                        c.checked = false;
                    });
                    refreshAll();
                });
            }

            // ── Init ──────────────────────────────────────────────────────────────────
            refreshAll();
        });
    </script>
@endpush
