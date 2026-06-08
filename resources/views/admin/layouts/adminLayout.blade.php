<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه فارغان - داشبورد</title>
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
  <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Vazirmatn', 'sans-serif'],
                    },
                    colors: {
                        sidebar: '#1a2332',
                        sidebarHover: '#243044',
                        accent: '#3b82f6',
                        accentLight: '#eff6ff',
                    }
                }
            }
        }
    </script>
    <style>
        * { font-family: 'Vazirmatn', sans-serif; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #94a3b8; border-radius: 3px; }
    </style>
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
    @stack('page_script')

</body>
</html>