@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <!-- Page Content -->
    <main class="p-6">
        <!-- Page Header -->
        <div class="flex items-start justify-between mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800 mb-1">نقش‌ها و دسترسی‌ها</h1>
                <p class="text-sm text-gray-500">تعریف نقش‌ها و سطوح دسترسی کاربران سیستم</p>
            </div>
            <div class="flex gap-5">

            <a href="{{ route('roles.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-medium transition-colors shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                نقش جدید
            </a>
            <a href="{{ route('permission.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-medium transition-colors shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                دسترسی جدید
            </a>
                            
            </div>
        </div>

        <!-- Role Cards Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            @foreach ($roles as $role)
                <div class="role-card bg-white rounded-2xl border border-gray-200 p-6">
                <div class="flex items-start justify-between mb-5">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1"> {{ $role['name'] }}</h3>
                        <p class="text-sm text-gray-500"> {{ $role['description'] }}</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                        <a href={{ route('roles.edit' , ['role'=>$role->id]) }}
                            class="p-1.5 text-gray-400 hover:text-blue-500 hover:bg-blue-50 rounded-lg transition-colors"
                            title="ویرایش">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach ($role['permissions'] as $permission)
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-md text-xs font-medium bg-green-50 text-green-700 border border-green-200">
                        {{ $permission['label'] }}
                    </span>
                        
                    @endforeach
                </div>
            </div>
            @endforeach

        </div>
    </main>
@endsection
