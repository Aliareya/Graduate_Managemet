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



        <form class="max-w-4xl" action="{{ route('roles.store') }}" method="POST">
            @csrf
            <!-- Basic Info Section -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                <h2 class="text-lg font-bold text-gray-800 mb-5 border-b border-gray-100 pb-3">اطلاعات پایه</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">نام نقش <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm"
                            placeholder="مثال: کارشناس آموزش">
                        <p class="text-xs text-gray-500 mt-1.5">نام یکتا و توصیفی برای این نقش انتخاب کنید</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">توضیحات</label>
                        <input type="text" name="description" value="{{ old('description') }}"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400/30 focus:border-blue-400 text-sm"
                            placeholder="توضیحات مختصر درباره وظایف این نقش">
                    </div>
                </div>
            </div>
            <!-- Permissions Section -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6">
                <div class="flex items-center justify-between mb-5 border-b border-gray-100 pb-3">
                    <h2 class="text-lg font-bold text-gray-800">دسترسی‌ها و مجوزها</h2>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" id="select-all"
                            class="checkbox-custom w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <span class="text-sm font-medium text-gray-700">انتخاب همه</span>
                    </label>
                </div>

                @foreach ($permissionGroups as $group)
                    <!-- Permission Group: {{ $group['title'] }} -->
                    <div class="permission-group p-4 rounded-xl border border-gray-200 mb-4">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 {{ $group['icon_bg'] }} rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 {{ $group['icon_color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="{{ $group['icon_path'] }}" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">{{ $group['title'] }}</h3>
                                    <p class="text-xs text-gray-500">{{ $group['description'] }}</p>
                                </div>
                            </div>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="checkbox-custom group-select-all w-5 h-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="text-sm font-medium text-gray-700">همه دسترسی‌ها</span>
                            </label>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                            @foreach ($group['permissions'] as $permission)
                                <label
                                    class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" name="permissions[]" value="{{ $permission['id'] }}"
                                        {{ in_array($permission['id'], old('permissions', [])) ? 'checked' : '' }}
                                        class="checkbox-custom permission-checkbox w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="text-sm text-gray-700">{{ $permission['label'] }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-end gap-3">
                <a href="{{ route('roles.index') }}"
                    class="px-6 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                    انصراف
                </a>
                <button type="submit"
                    class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm font-medium transition-colors shadow-sm flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    ایجاد نقش
                </button>
            </div>
        </form>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const selectAll = document.getElementById('select-all');
            const allPermissionCheckboxes = document.querySelectorAll('.permission-checkbox');
            const groupSelectAlls = document.querySelectorAll('.group-select-all');

            selectAll.addEventListener('change', function () {
                allPermissionCheckboxes.forEach(cb => cb.checked = selectAll.checked);
                groupSelectAlls.forEach(cb => cb.checked = selectAll.checked);
            });

            groupSelectAlls.forEach(groupCb => {
                const group = groupCb.closest('.permission-group');
                const groupCheckboxes = group.querySelectorAll('.permission-checkbox');

                groupCb.addEventListener('change', function () {
                    groupCheckboxes.forEach(cb => cb.checked = groupCb.checked);
                    updateSelectAllState();
                });

                groupCheckboxes.forEach(cb => {
                    cb.addEventListener('change', function () {
                        const allChecked = Array.from(groupCheckboxes).every(c => c.checked);
                        groupCb.checked = allChecked;
                        updateSelectAllState();
                    });
                });
            });

            function updateSelectAllState() {
                const allChecked = Array.from(allPermissionCheckboxes).every(cb => cb.checked);
                selectAll.checked = allChecked;
            }
        });
    </script>
@endsection