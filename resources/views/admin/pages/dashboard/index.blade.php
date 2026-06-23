@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <main class="p-8" dir="rtl">

        <!-- Page Title -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900">@lang('dashboard.title')</h1>
            <p class="text-sm text-gray-500 mt-1">@lang('dashboard.subtitle')</p>
        </div>

        {{-- Hero Section --}}
        <div class="bg-[#34a898] mb-7 rounded-3xl p-6 md:p-8 text-white relative overflow-hidden animate-slide-up">
            <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full -translate-x-32 -translate-y-32 blur-3xl">
            </div>
            <div
                class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/20 rounded-full translate-x-48 translate-y-48 blur-3xl">
            </div>
            <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-white/20 backdrop-blur rounded-full text-xs font-medium">
                            <i class="fas fa-circle text-green-400 text-[8px] ml-1 animate-pulse"></i>
                            @lang('dashboard.system_active')
                        </span>
                        <span class="px-3 py-1 bg-white/20 backdrop-blur rounded-full text-xs font-medium">
                            <i class="fas fa-calendar ml-1"></i>
                            {{ now()->format('Y/m/d') }}
                        </span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">سلام {{ auth()->user()->name }} 👋</h1>
                    <p class="text-indigo-100 text-sm md:text-base max-w-xl">
                        @lang('dashboard.welcome_message')
                    </p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('graduates.create') }}"
                        class="px-5 py-3 bg-white text-green-700 rounded-xl font-semibold hover:bg-indigo-50 transition-colors shadow-lg flex items-center gap-2">
                        <i class="fas fa-plus"></i>
                        @lang('dashboard.add_graduate')
                    </a>
                    <button onclick="exportData()"
                        class="px-5 py-3 bg-white/10 backdrop-blur border border-white/20 text-white rounded-xl font-semibold hover:bg-white/20 transition-colors flex items-center gap-2">
                        <i class="fas fa-download"></i>
                        {{ __('dashboard.logout') }}
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5 mb-8">

            <!-- Card 1: Total Alumni -->
            <div class="bg-white rounded-2xl border border-gray-500 p-5 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-lg">+۲٪</span>
                </div>
                <p class="text-2xl font-bold text-gray-900">{{ $dashboard['total_graduate'] }}</p>
                <p class="text-xs text-gray-500 mt-1">@lang('dashboard.total_graduates')</p>
            </div>

            <!-- Card 2: Faculties -->
            <div class="bg-white rounded-2xl border border-gray-500 p-5 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-cyan-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-gray-500 bg-gray-100 px-2 py-1 rounded-lg">ثابت</span>
                </div>
                <p class="text-2xl font-bold text-gray-900">{{ $dashboard['total_faculties'] }}</p>
                <p class="text-xs text-gray-500 mt-1">@lang('dashboard.total_faculties')</p>
            </div>

            <!-- Card 3: Departments -->
            <div class="bg-white rounded-2xl border border-gray-500 p-5 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-lg">+۲</span>
                </div>
                <p class="text-2xl font-bold text-gray-900">{{ $dashboard['total_department'] }}</p>
                <p class="text-xs text-gray-500 mt-1">@lang('dashboard.total_departments')</p>
            </div>

            <!-- Card 4: Employed -->
            <div class="bg-white rounded-2xl border border-gray-500 p-5 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-lg">+۵/۱٪</span>
                </div>
                <p class="text-2xl font-bold text-gray-900">{{ $dashboard['total_employe'] }}</p>
                <p class="text-xs text-gray-500 mt-1">@lang('dashboard.employed_graduates')</p>
            </div>

            <!-- Card 5: Unemployed -->
            <div class="bg-white rounded-2xl border border-gray-500 p-5 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <span class="text-xs font-semibold text-red-600 bg-red-50 px-2 py-1 rounded-lg">-۱/۸٪</span>
                </div>
                <p class="text-2xl font-bold text-gray-900">{{ $dashboard['total_unemploye'] }}</p>
                <p class="text-xs text-gray-500 mt-1">@lang('dashboard.unemployed_graduates')</p>
            </div>

        </div>

        <!-- Bottom Section: Table + Events -->
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">

            <!-- Recent Graduates Table -->
            <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">@lang('dashboard.recent_graduates')</h2>
                    <button
                        class="text-xs text-blue-600 hover:text-blue-700 font-medium flex items-center gap-1 bg-blue-50 px-3 py-1.5 rounded-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        @lang('dashboard.this_week')
                    </button>
                </div>

                <!-- Table Container -->
                <div class="">
                    <table id="recentGraduatesTable" class="w-full">
                        <thead class="bg-gray-50">
                            <tr class="text-xs text-gray-500 border-b border-gray-100">
                                <th class="text-right px-6 py-4 font-semibold">فارغ‌التحصیل</th>
                                <th class="text-right px-6 py-4 font-semibold">دانشکده</th>
                                <th class="text-right px-6 py-4 font-semibold">دپارتمنت</th>
                                <th class="text-right px-6 py-4 font-semibold">سال فراغت</th>
                                <th class="text-right px-6 py-4 font-semibold">وضعیت</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            <!-- Data loaded via AJAX -->
                        </tbody>
                    </table>
                </div>

                <!-- Custom Pagination -->
                <div
                    class="px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="text-sm text-gray-600 dt-info-text"></div>
                    <div class="dt-pagination-custom flex gap-1"></div>
                </div>
            </div>

        </div>

    </main>

    @push('page_script')
        <style>
            /* Hide default DataTables elements */
            .dataTables_filter,
            .dataTables_length,
            .dataTables_info,
            .dataTables_processing {
                display: none !important;
            }

            .dataTables_wrapper .dataTables_paginate {
                display: none !important;
            }

            /* Custom Pagination Styling */
            .custom-paginate-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-width: 2.25rem;
                height: 2.25rem;
                padding: 0 0.625rem;
                font-size: 0.875rem;
                font-weight: 500;
                color: #6b7280;
                background-color: white;
                border: 1px solid #e5e7eb;
                border-radius: 0.5rem;
                cursor: pointer;
                transition: all 0.2s;
                text-decoration: none !important;
                user-select: none;
            }

            .custom-paginate-btn:hover:not(.disabled):not(.current) {
                background-color: #f9fafb;
                color: #1f2937;
                border-color: #d1d5db;
            }

            .custom-paginate-btn.current {
                background-color: #34a898;
                color: white !important;
                border-color: #34a898;
                z-index: 1;
            }

            .custom-paginate-btn.disabled {
                color: #9ca3af;
                background-color: #f9fafb;
                cursor: not-allowed;
                opacity: 0.7;
            }

            /* Table Row Hover Effect */
            #recentGraduatesTable tbody tr {
                transition: all 0.2s;
            }

            #recentGraduatesTable tbody td {
                padding-top: 10px !important;
                padding-bottom: 10px !important;
                padding-left: 10px !important;
                padding-right: 10px !important;

            }

            #recentGraduatesTable tbody tr:hover {
                background-color: #f9fafb;
                transform: translateX(-2px);
            }

            /* Avatar Styling */
            .avatar-circle {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 600;
                font-size: 0.875rem;
                flex-shrink: 0;
            }
        </style>

        <script>
            $(document).ready(function() {
                var table = $('#recentGraduatesTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('dashboard.data') }}",
                    columns: [{
                            data: 'full_name',
                            name: 'first_name',
                            render: function(data, type, row) {
                                // Generate avatar with first letter
                                var firstName = row.first_name || '';
                                var firstLetter = firstName.charAt(0);
                                var colors = [
                                    'bg-blue-100 text-blue-700',
                                    'bg-green-100 text-green-700',
                                    'bg-purple-100 text-purple-700',
                                    'bg-pink-100 text-pink-700',
                                    'bg-indigo-100 text-indigo-700',
                                    'bg-teal-100 text-teal-700'
                                ];
                                var colorClass = colors[row.id % colors.length];

                                return '<div class="flex items-center gap-3">' +
                                    '<div class="avatar-circle ' + colorClass + '">' + firstLetter +
                                    '</div>' +
                                    '<div>' +
                                    '<div class="font-semibold text-gray-900">' + data + '</div>' +
                                    '</div>' +
                                    '</div>';
                            }
                        },
                        {
                            data: 'faculty_name',
                            name: 'faculty.name',
                            className: 'text-gray-600'
                        },
                        {
                            data: 'department_name',
                            name: 'department.name',
                            className: 'text-gray-600'
                        },
                        {
                            data: 'graduation_year',
                            name: 'graduation_year',
                            className: 'text-gray-600 text-center'
                        },
                        {
                            data: 'employment_status',
                            name: 'is_employed',
                            orderable: false,
                            searchable: false,
                            className: 'text-center'
                        }
                    ],
                    language: {
                        processing: "<div class='flex items-center justify-center gap-2 py-8'><div class='w-6 h-6 border-3 border-blue-600 border-t-transparent rounded-full animate-spin'></div><span class='text-sm text-gray-600'>در حال بارگذاری...</span></div>",
                        info: "نمایش _START_ تا _END_ از _TOTAL_ فارغ‌التحصیل",
                        infoEmpty: "هیچ رکوردی یافت نشد",
                        infoFiltered: "(فیلتر شده از _MAX_ رکورد)",
                        paginate: {
                            previous: "قبلی",
                            next: "بعدی"
                        },
                        zeroRecords: "هیچ داده‌ای یافت نشد"
                    },
                    // Dashboard specific settings
                    searching: false,
                    lengthChange: false,
                    pageLength: 5,
                    ordering: true,
                    order: [
                        [0, 'asc']
                    ],
                    drawCallback: function() {
                        // Rebuild pagination with custom styling
                        var $pagination = $('.dataTables_paginate');
                        var $customContainer = $('.dt-pagination-custom').empty();

                        $pagination.find('.paginate_button').each(function() {
                            var $btn = $(this);
                            var html = $btn.html();
                            var classes = 'custom-paginate-btn';

                            if ($btn.hasClass('current')) classes += ' current';
                            if ($btn.hasClass('disabled')) classes += ' disabled';

                            var $newBtn = $('<a>')
                                .addClass(classes)
                                .html(html)
                                .attr('href', $btn.attr('href'))
                                .attr('data-dt-idx', $btn.attr('data-dt-idx'));

                            $newBtn.on('click', function(e) {
                                e.preventDefault();
                                $btn.trigger('click');
                            });

                            $customContainer.append($newBtn);
                        });

                        // Update info text
                        $('.dt-info-text').html($('.dataTables_info').html());
                    }
                });
            });

            function exportData() {
                alert('Export functionality');
            }
        </script>
    @endpush
@endsection
