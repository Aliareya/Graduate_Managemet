<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'سامانه فارغان - داشبورد')</title>
    
    <!-- Vite Assets (Tailwind CSS & App JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Gradient Header for Table */
        .gradient-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        /* Hover Row Animation */
        .hover-row {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-row:hover {
            transform: translateX(-4px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            background-color: #f9fafb !important;
        }

        /* Custom Scrollbar for Table */
        .overflow-x-auto::-webkit-scrollbar {
            height: 6px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Checkbox Custom Styling */
        input[type="checkbox"] {
            cursor: pointer;
            accent-color: #2563eb;
        }

        /* Pulse Animation for Status */
        @keyframes pulse-dot {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .animate-pulse {
            animation: pulse-dot 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        /* Button Hover Effects */
        button {
            transition: all 0.2s ease;
        }

        button:active {
            transform: scale(0.95);
        }

        /* Table Row Border Animation */
        .divide-y>* {
            transition: border-color 0.2s ease;
        }
        
        /* Global Font */
        * {
            font-family: 'Vazirmatn', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #94a3b8;
            border-radius: 3px;
        }
        
        /* DataTables RTL Fixes */
        .dataTables_wrapper {
            direction: rtl;
        }
        .dataTables_filter {
            float: left !important;
            margin-bottom: 1rem;
        }
        .dataTables_length {
            float: right !important;
            margin-bottom: 1rem;
        }
        .dataTables_info {
            float: right !important;
        }
        .dataTables_paginate {
            float: left !important;
        }
    </style>

    @stack('page_style')
</head>

<body class="bg-gray-50 font-vazir">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('admin.layouts.Sidebar')

        <main class="flex-1 mr-64">
            <!-- Top Header -->
            @include('admin.layouts.TopHeader')

            <!-- Page Content -->
            @yield('admin_page_content')
        </main>
    </div>

    <!-- 1. jQuery (Required for DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- 2. DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- 4. Page Specific Scripts -->
    @stack('page_script')

</body>
</html>