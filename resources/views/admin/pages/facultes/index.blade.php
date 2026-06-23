@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <div class="p-8" dir="rtl">
        <!-- Page Header -->
        <div class="mb-8 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">مدیریت پوهنخی‌ها</h1>
                <p class="text-gray-500 mt-1">فهرست پوهنخی‌های فعال دانشگاه</p>
            </div>
            <a href="{{ route('facultes.create') }}"
                class="flex items-center gap-2 px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span class="text-sm font-medium">افزودن پوهنخی</span>
            </a>
        </div>

        <!-- Search & Entries Bar -->
        <div
            class="bg-white rounded-xl border border-gray-200 shadow-sm p-4 mb-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-2">
                <label class="text-sm text-gray-600 whitespace-nowrap">تعداد نمایش</label>
                <select id="entriesSelect"
                    class="bg-gray-50 border border-gray-200 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 w-[150px] text-left">
                    <option value="6">6</option>
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="48">48</option>
                </select>
            </div>
            <div class="relative w-full md:w-64">
                <input type="text" id="globalSearch" placeholder="جستجو بر اساس نام..."
                    class="w-full bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pr-10 pl-4 p-2.5 text-right">
                <svg class="w-5 h-5 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <!-- ✅ WRAPPER: Relative container for cards + loading overlay -->
        <div class="relative min-h-[300px]">
            
            <!-- Cards Grid Container -->
            <div id="cardsContainer" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                <!-- Cards injected here by DataTables -->
            </div>

            <!-- ✅ Loading Overlay (Now only covers cards area) -->
            <div id="tableLoading"
                class="absolute inset-0 bg-white/70 backdrop-blur-sm lex items-center justify-center z-50 hidden rounded-xl border border-gray-100">
                <div class="flex flex-col items-center gap-3">
                    <div class="w-10 h-10 border-4 border-blue-200 border-t-blue-600 rounded-full animate-spin"></div>
                    <span class="text-sm text-gray-600 font-medium">در حال بارگذاری...</span>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="text-sm text-gray-600 dt-info-text"></div>
            <div class="dt-pagination-custom flex gap-1"></div>
        </div>

        <!-- Hidden Table for DataTables Engine -->
        <table id="facultiesTable" class="hidden">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
@endsection

@push('page_script')
    <style>
        .dataTables_filter,
        .dataTables_length,
        .dataTables_info,
        .dataTables_processing {
            display: none !important;
        }

        .dataTables_wrapper .dataTables_paginate {
            float: none !important;
            margin: 0 !important;
            display: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0 !important;
            margin: 0 !important;
            background: transparent !important;
            border: none !important;
        }

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
    </style>

    <script>
        $(document).ready(function() {
            var table = $('#facultiesTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('facultes.data') }}",
                    beforeSend: () => $('#tableLoading').removeClass('hidden'),
                    complete: () => $('#tableLoading').addClass('hidden')
                },
                columns: [{
                    data: 'card_html',
                    name: 'name',
                    visible: false,
                    searchable: true
                }],
                language: {
                    paginate: {
                        previous: "قبلی",
                        next: "بعدی"
                    },
                    info: "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                    infoEmpty: "هیچ رکوردی یافت نشد",
                    infoFiltered: "(فیلتر شده از _MAX_ رکورد کل)",
                    processing: ""
                },
                drawCallback: function(settings) {
                    var api = this.api();
                    var $container = $('#cardsContainer').empty();

                    var currentPageData = api.rows({
                        page: 'current'
                    }).data().toArray();

                    currentPageData.forEach(function(row) {
                        if (row.card_html) {
                            $container.append(row.card_html);
                        }
                    });

                    var $pagination = $('.dataTables_paginate');
                    var $customContainer = $('.dt-pagination-custom').empty();
                    $pagination.find('.paginate_button').each(function() {
                        var $btn = $(this);
                        var classes = 'custom-paginate-btn';
                        if ($btn.hasClass('current')) classes += ' current';
                        if ($btn.hasClass('disabled')) classes += ' disabled';

                        var $newBtn = $('<a>').addClass(classes).html($btn.html())
                            .attr('href', $btn.attr('href'))
                            .attr('aria-controls', $btn.attr('aria-controls'))
                            .attr('data-dt-idx', $btn.attr('data-dt-idx'));

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