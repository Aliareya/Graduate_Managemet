@extends('admin.layouts.adminLayout')
@section('admin_page_content')
    <div class="p-8">
        <!-- Page Header -->
        <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">@lang('graduate.page_title')</h1>
                <p class="text-gray-500 mt-1">@lang('graduate.page_description')</p>
            </div>
            <div class="flex gap-3">
                <button
                    class="flex items-center gap-2 px-4 py-2.5 bg-white border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    <span class="text-sm font-medium">@lang('graduate.export_excel')</span>
                </button>
                <a href="{{ route('graduates.create') }}"
                    class="flex items-center gap-2 px-4 py-2.5 bg-blue-700 text-white rounded-lg hover:bg-blue-600 transition-colors shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="text-sm font-medium">@lang('graduate.add_graduate')</span>
                </a>
            </div>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-xl border border-gray-200 p-4 mb-6 shadow-sm">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1 relative">
                    <input type="text" placeholder="@lang('graduate.search_placeholder')"
                        class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-2.5 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <button
                    class="flex items-center gap-2 px-4 py-2.5 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    <span class="text-sm">@lang('graduate.filters')</span>
                </button>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">@lang('graduate.full_name')</th>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">@lang('graduate.student_id')</th>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">@lang('graduate.faculty')</th>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">@lang('graduate.department')</th>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">@lang('graduate.graduation_year')</th>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">@lang('graduate.employment_status')</th>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">@lang('graduate.actions')</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($graduate as $grad)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">
                                    <span class="font-medium text-gray-800">{{ $grad['first_name'] }}
                                        {{ $grad['last_name'] }} </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600 font-mono">{{ $grad['student_id'] }} </td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $grad['faculty']['name'] }} </td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $grad['department']['name'] }} </td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $grad['graduation_year'] }} </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-success-light text-success">
                                    @if ($grad['is_employed'] === "yes")
                                    @lang('graduate.employed')
                                    @endif
                                    @if ($grad['is_employed'] === "no")
                                    {{ $grad['job_status'] }}
                                    @endif
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <a href={{ route('graduates.show' , ['graduate'=>$grad->id]) }}
                                            class="p-2 text-gray-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors"
                                            title="@lang('graduate.view')">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a  href={{ route('graduates.edit' , ['graduate'=>$grad->id]) }} class="p-2 text-gray-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors"
                                            title="@lang('graduate.edit')">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="border-t border-gray-200 px-6 py-4 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="text-sm text-gray-600">
                    @lang('graduate.showing')
                </div>
                <div class="flex items-center gap-2">
                    <button
                        class="px-4 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors">@lang('graduate.previous')</button>
                    <button
                        class="px-4 py-2 border border-gray-200 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors">@lang('graduate.next')</button>
                </div>
            </div>
        </div>
    </div>
@endsection