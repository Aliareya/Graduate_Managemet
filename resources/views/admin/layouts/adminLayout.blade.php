<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <html lang="{{ app()->getLocale() }}"
      dir="{{ app()->getLocale() === 'fa' ? 'ltr' : 'ltr' }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه فارغان - داشبورد</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
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
.divide-y > * {
    transition: border-color 0.2s ease;
}

/* Gradient Avatar Shadows */
.shadow-blue-500\/30 {
    --tw-shadow-color: rgba(59, 130, 246, 0.3);
}

.shadow-purple-500\/30 {
    --tw-shadow-color: rgba(147, 51, 234, 0.3);
}

.shadow-teal-500\/30 {
    --tw-shadow-color: rgba(20, 184, 166, 0.3);
}

.shadow-pink-500\/30 {
    --tw-shadow-color: rgba(236, 72, 153, 0.3);
}

.shadow-gray-500\/30 {
    --tw-shadow-color: rgba(107, 114, 128, 0.3);
}
    </style>
    <style>
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
