@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <div class="p-8">
        <!-- Page Header with Actions -->
        <div class="mb-8 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <h1 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
                    {{ __('graduate_show.page_title') }}
                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </h1>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('graduates.edit',['graduate'=> $graduate->id]) }}"
                    class="flex items-center gap-2 px-4 py-2 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                    <span class="text-sm font-medium">{{ __('graduate_show.edit') }}</span>
                </a>
                <form action={{ route('graduates.destroy',['graduate'=> $graduate->id]) }} method="post" 
                      onsubmit="return confirm('{{ __('graduate_show.delete_confirm') }}')">
                    @method('DELETE')
                    @csrf
                    <button type="submit"
                        class="flex items-center gap-2 px-4 py-2 bg-red-800 text-white rounded-lg hover:bg-danger-hover transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        <span class="text-sm font-medium">{{ __('graduate_show.delete') }}</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Profile Header Card -->
        <div class="bg-white rounded-2xl border border-gray-200 p-6 mb-6 shadow-sm">
            <div class="flex items-center justify-start">
                <div class="flex-1 ">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $graduate->first_name }} {{ $graduate->last_name }}</h2>
                    <p class="text-gray-600 mb-2">
                        {{ __('graduate_show.faculty') }} {{ $graduate->faculty->name }} – 
                        {{ __('graduate_show.department') }} {{ $graduate->department->name }}
                    </p>
                    <div class="flex items-center gap-4 text-sm text-gray-500">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            {{ $graduate->phone }}
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            {{ $graduate->email }}
                        </span>
                    </div>
                </div>
                <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Info Cards Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
            <!-- Educational Information -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
                <h3 class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    </svg>
                    {{ __('graduate_show.educational_info') }}
                </h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.student_id') }}</span>
                        <span class="font-medium text-gray-800">{{ $graduate->student_id }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.faculty') }}</span>
                        <span class="font-medium text-gray-800">{{ $graduate->faculty->name }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.department') }}</span>
                        <span class="font-medium text-gray-800">{{ $graduate->department->name }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.entry_year') }}</span>
                        <span class="font-medium text-gray-800">{{ $graduate->entry_year }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.graduation_year') }}</span>
                        <span class="font-medium text-gray-800">{{ $graduate->graduation_year }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3">
                        <span class="text-gray-500">{{ __('graduate_show.degree') }}</span>
                        @if ($graduate->degree === 'bachelor')
                            <span class="font-medium text-gray-800">{{ __('graduate_show.bachelor') }}</span>
                        @elseif($graduate->degree === 'master')
                            <span class="font-medium text-gray-800">{{ __('graduate_show.master') }}</span>
                        @elseif($graduate->degree === 'phd')
                            <span class="font-medium text-gray-800">{{ __('graduate_show.phd') }}</span>
                        @else
                            <span class="font-medium text-gray-800">-</span>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Personal Information -->
            <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
                <h3 class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    {{ __('graduate_show.personal_info') }}
                </h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.father_name') }}</span>
                        <span class="font-medium text-gray-800">{{ $graduate->father_name ?? '-' }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.gender') }}</span>
                        @if ($graduate->gender === 'male')
                            <span class="font-medium text-gray-800">{{ __('graduate_show.male') }}</span>
                        @elseif($graduate->gender === 'female')
                            <span class="font-medium text-gray-800">{{ __('graduate_show.female') }}</span>
                        @else
                            <span class="font-medium text-gray-800">-</span>
                        @endif
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.birth_date') }}</span>
                        <span class="font-medium text-gray-800">{{ $graduate->birth_date ?? '-' }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3">
                        <span class="text-gray-500">{{ __('graduate_show.address') }}</span>
                        <span class="font-medium text-gray-800">{{ $graduate->address ?? '-' }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Employment Information -->
        <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-sm">
            <h3 class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2">
                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                {{ __('graduate_show.employment_info') }}
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.employment_status') }}</span>
                        @if ($graduate->is_employed === 'yes')
                            <span class="font-medium text-gray-800">{{ __('graduate_show.employed') }}</span>
                        @else
                            <span class="font-medium text-gray-800">{{ $graduate->job_status ?? '-' }}</span>
                        @endif
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.job_title') }}</span>
                        <span class="font-medium text-gray-800">{{ $graduate->job_title ?? '-' }}</span>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.company_name') }}</span>
                        <span class="font-medium text-gray-800">{{ $graduate->company_name ?? '-' }}</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="text-gray-500">{{ __('graduate_show.work_location') }}</span>
                        <span class="font-medium text-gray-800">{{ $graduate->work_location ?? '-' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection