@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <div class="p-8" dir="rtl">
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

        <!-- Table Container -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden relative">

            <!-- TOP: Search & Entries -->
            <div
                class="p-4 border-b border-gray-200 flex flex-col md:flex-row justify-between items-center gap-4 z-10 relative">
                <div class="flex items-center gap-2">
                    <label class="text-sm text-gray-600 whitespace-nowrap">@lang('graduate.showing', ['default' => 'نمایش ورودی‌ها'])</label>
                    <select id="entriesSelect"
                        class="bg-gray-50 border border-gray-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="relative w-full md:w-64">
                    <input type="text" id="globalSearch" placeholder="@lang('graduate.search_placeholder')"
                        class="w-full bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pr-10 pl-4 p-2.5 text-right">
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <!-- Table Body (Fixed Structure) -->
            <div class="overflow-x-auto min-h-[300px]">
                <table id="graduatesTable" class="w-full text-sm text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-right">@lang('graduate.full_name')</th>
                            <th scope="col" class="px-6 py-4 text-right">@lang('graduate.student_id')</th>
                            <th scope="col" class="px-6 py-4 text-right">@lang('graduate.faculty')</th>
                            <th scope="col" class="px-6 py-4 text-right">@lang('graduate.department')</th>
                            <th scope="col" class="px-6 py-4 text-right">@lang('graduate.graduation_year')</th>
                            <th scope="col" class="px-6 py-4 text-right">@lang('graduate.employment_status')</th>
                            <th scope="col" class="px-6 py-4 text-right">@lang('graduate.actions')</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <!-- Data loaded via AJAX -->
                    </tbody>
                </table>
            </div>

            <!-- BOTTOM: Pagination & Info -->
            <div
                class="p-4 border-t border-gray-200 flex flex-col md:flex-row items-center justify-between gap-4 z-10 relative">
                <div class="text-sm text-gray-600 dt-info-text"></div>
                <div class="dt-pagination-custom flex gap-1"></div>
            </div>

            <!-- Custom Loading Overlay -->
            <div id="tableLoading"
                class="absolute inset-0 bg-white/80 backdrop-blur-sm flex items-center justify-center z-20 hidden">
                <div class="flex flex-col items-center gap-3">
                    <div class="w-8 h-8 border-4 border-blue-200 border-t-blue-600 rounded-full animate-spin"></div>
                    <span class="text-sm text-gray-600 font-medium">در حال بارگذاری...</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_script')
    <style>
        /* Hide ALL default DataTables controls */
        .dataTables_filter,
        .dataTables_length,
        .dataTables_info,
        .dataTables_processing {
            display: none !important;
        }

        /* Reset default pagination */
        .dataTables_wrapper .dataTables_paginate {
            display: none;
            float: none !important;
            text-align: center !important;
            margin: 0 !important;
        }

        #graduatesTable tbody {}

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0 !important;
            margin: 0 !important;
            background: transparent !important;
            border: none !important;
        }

        /* Custom Pagination Buttons */
        .custom-paginate-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 2.5rem;
            height: 2.5rem;
            padding: 0 0.75rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: #4b5563;
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
            background-color: #1d4ed8;
            color: white !important;
            border-color: #1d4ed8;
            z-index: 1;
        }

        .custom-paginate-btn.disabled {
            color: #9ca3af;
            background-color: #f9fafb;
            cursor: not-allowed;
            opacity: 0.7;
        }

        /* Table Cell Padding (Applied correctly to TD) */
        #graduatesTable tbody td {
            padding-top: 1.25rem !important;
            padding-left: 2px !important;
            padding-right: 20px !important;
            padding-bottom: 1.25rem !important;
            vertical-align: middle;
        }

        #graduatesTable tbody tr {
            border-bottom: 1px solid rgb(227, 224, 224);
        }
        #entriesSelect{
            width: 150px;
            text-align: left;
        }
    </style>

    <script>
        $(document).ready(function() {
            var table = $('#graduatesTable').DataTable({
                processing: true, // Enable processing indicator
                serverSide: true,
                ajax: {
                    url: "{{ route('graduates.data') }}",
                    // Show/Hide custom loader on AJAX events
                    beforeSend: function() {
                        $('#tableLoading').removeClass('hidden');
                    },
                    complete: function() {
                        $('#tableLoading').addClass('hidden');
                    }
                },
                columns: [{
                        data: 'full_name',
                        name: 'full_name'
                    },
                    {
                        data: 'student_id',
                        name: 'student_id'
                    },
                    {
                        data: 'faculty_name',
                        name: 'faculty.name'
                    },
                    {
                        data: 'department_name',
                        name: 'department.name'
                    },
                    {
                        data: 'graduation_year',
                        name: 'graduation_year'
                    },
                    {
                        data: 'employment_status',
                        name: 'is_employed',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    }
                ],
                language: {
                    paginate: {
                        previous: "@lang('graduate.previous')",
                        next: "@lang('graduate.next')"
                    },
                    info: "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                    infoEmpty: "هیچ رکوردی یافت نشد",
                    infoFiltered: "(فیلتر شده از _MAX_ رکورد کل)",
                    processing: "" // Empty string since we use custom loader
                },
                drawCallback: function(settings) {
                    var $pagination = $('.dataTables_paginate');
                    var $customContainer = $('.dt-pagination-custom').empty();

                    // Rebuild pagination buttons
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
                            .attr('aria-controls', $btn.attr('aria-controls'))
                            .attr('data-dt-idx', $btn.attr('data-dt-idx'))
                            .attr('tabindex', $btn.attr('tabindex'));

                        $newBtn.on('click', function(e) {
                            e.preventDefault();
                            $btn.trigger('click');
                        });

                        $customContainer.append($newBtn);
                    });

                    $('.dt-info-text').html($('.dataTables_info').html());
                }
            });

            $('#globalSearch').on('keyup', function() {
                table.search(this.value).draw();
            });
            $('#entriesSelect').on('change', function() {
                table.page.len(this.value).draw();
            });
        });
    </script>
@endpush
