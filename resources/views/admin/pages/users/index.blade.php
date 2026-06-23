@extends('admin.layouts.adminLayout')

@section('admin_page_content')
    <main class="p-6" dir="rtl">

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            @foreach ($usersState as $state)
                <div class="bg-white rounded-xl border border-gray-200 p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">{{ $state['title'] }}</p>
                            <p class="text-2xl font-bold text-gray-800">{{ $state['total'] }}</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Search & Filter Bar -->
        <div class="bg-white rounded-xl border border-gray-200 p-4 mb-6 flex items-center gap-3">
            <div class="flex-1 relative">
                <input type="text" id="globalSearch" placeholder="جستجو بر اساس نام، ایمیل یا نام کاربری..."
                    class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-2.5 pr-10 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-400/30 focus:border-teal-400">
                <svg class="w-5 h-5 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <select id="roleFilter"
                class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-400/30 focus:border-teal-400">
                <option value="">همه نقش‌ها</option>
                <option value="super_admin">Super Admin</option>
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
                <option value="viewer">Viewer</option>
            </select>
            <select id="statusFilter"
                class="bg-gray-50 border border-gray-200 rounded-lg px-4 py-2.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-400/30 focus:border-teal-400">
                <option value="">همه وضعیت‌ها</option>
                <option value="active">فعال</option>
                <option value="inactive">غیرفعال</option>
                <option value="suspended">مسدود</option>
            </select>
        </div>

        <!-- Data Table -->
        <div class="bg-white rounded-xl border border-gray-200 overflow-hidden relative">
            <div class="overflow-x-auto">
                <table id="usersTable" class="w-full">
                    <thead>
                        <tr class="border-b border-gray-100 bg-gray-50">
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">کاربر</th>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">نقش</th>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">وضعیت</th>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">تاریخ عضویت</th>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">آخرین ورود</th>
                            <th class="text-right text-xs font-medium text-gray-500 px-6 py-4">عملیات</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        <!-- Data loaded via AJAX -->
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="border-t border-gray-100 px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-gray-500 dt-info-text"></p>
                <div class="flex items-center gap-2 dt-pagination-custom"></div>
            </div>

            <!-- Loading Overlay -->
            <div id="tableLoading"
                class="absolute inset-0 bg-white/80 backdrop-blur-sm flx items-center justify-center z-50 hidden">
                <div class="flex flex-col items-center gap-3">
                    <div class="w-10 h-10 border-4 border-teal-200 border-t-teal-600 rounded-full animate-spin"></div>
                    <span class="text-sm text-gray-600 font-medium">در حال بارگذاری...</span>
                </div>
            </div>
        </div>
    </main>

    @push('page_script')
    <style>
        /* Hide default DataTables elements */
        .dataTables_filter, .dataTables_length, .dataTables_info, .dataTables_processing {
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
            padding: 0 0.75rem;
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
            background-color: #2dd4bf;
            color: white !important;
            border-color: #2dd4bf;
            z-index: 1;
        }

        .custom-paginate-btn.disabled {
            color: #9ca3af;
            background-color: #f9fafb;
            cursor: not-allowed;
            opacity: 0.7;
        }

        /* Table Row Hover Effect */
        #usersTable tbody tr {
            transition: all 0.2s;
        }

        #usersTable tbody tr:hover {
            background-color: #f9fafb;
        }

        /* Table Cell Padding */
        #usersTable tbody td {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
            padding-left: 10px !important;
            padding-right: 10px !important;
            vertical-align: middle;
        }
        #user_bg{
            background: linear-gradient(to right, #06b6d4, #34a89875);
        }
        #statusFilter {
            width: 200px;
            text-align: left;
        }
        #roleFilter{
            width: 200px;
            text-align: left;
        }
    </style>

    <script>
        $(document).ready(function() {
            var table = $('#usersTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('users.data') }}",
                    data: function(d) {
                        d.role = $('#roleFilter').val();
                        d.status = $('#statusFilter').val();
                    },
                    beforeSend: () => $('#tableLoading').removeClass('hidden'),
                    complete: () => $('#tableLoading').addClass('hidden')
                },
                columns: [
                    { data: 'user_info', name: 'name', orderable: true, searchable: true },
                    { data: 'role_badge', name: 'roles.name', orderable: false, searchable: true },
                    { data: 'status_badge', name: 'status', orderable: true, searchable: true },
                    { data: 'created_at_formatted', name: 'created_at', orderable: true, searchable: false },
                    { data: 'last_login', name: 'finaly_login', orderable: true, searchable: false },
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ],
                language: {
                    processing: "",
                    info: "نمایش _START_ تا _END_ از _TOTAL_ کاربر",
                    infoEmpty: "هیچ کاربری یافت نشد",
                    infoFiltered: "(فیلتر شده از _MAX_ کاربر)",
                    paginate: {
                        previous: "قبلی",
                        next: "بعدی"
                    },
                    zeroRecords: "هیچ داده‌ای یافت نشد"
                },
                pageLength: 10,
                ordering: true,
                order: [[3, 'desc']],
                drawCallback: function() {
                    // Rebuild pagination
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

                    $('.dt-info-text').html($('.dataTables_info').html());
                }
            });

            // Search hook
            $('#globalSearch').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Filter hooks
            $('#roleFilter, #statusFilter').on('change', function() {
                table.draw();
            });
        });
    </script>
    @endpush
@endsection