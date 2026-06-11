<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه فارغان - اختصاص نقش به کاربر</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Vazirmatn', sans-serif;
            background-color: #f0f2f5;
            color: #1a1a2e;
            display: flex;
            min-height: 100vh;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: 260px;
            background: #0f1923;
            color: #fff;
            position: fixed;
            right: 0;
            top: 0;
            bottom: 0;
            overflow-y: auto;
            z-index: 100;
            padding-top: 0;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 20px 24px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .sidebar-logo {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, #2dd4a8, #1abc9c);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .sidebar-title {
            font-size: 16px;
            font-weight: 700;
        }

        .sidebar-subtitle {
            font-size: 11px;
            color: rgba(255,255,255,0.5);
            margin-top: 2px;
        }

        .sidebar-section-title {
            font-size: 12px;
            color: #2dd4a8;
            padding: 20px 24px 8px;
            font-weight: 600;
        }

        .sidebar-nav {
            list-style: none;
        }

        .sidebar-nav li a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 24px;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 14px;
            transition: all 0.2s;
            border-right: 3px solid transparent;
        }

        .sidebar-nav li a:hover {
            background: rgba(255,255,255,0.05);
            color: #fff;
        }

        .sidebar-nav li a.active {
            background: rgba(45, 212, 168, 0.12);
            color: #2dd4a8;
            border-right-color: #2dd4a8;
        }

        .sidebar-nav li a .nav-icon {
            width: 20px;
            text-align: center;
            font-size: 16px;
        }

        /* ===== MAIN CONTENT ===== */
        .main-content {
            flex: 1;
            margin-right: 260px;
            min-height: 100vh;
        }

        /* ===== TOP HEADER ===== */
        .top-header {
            background: #fff;
            padding: 16px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #e8ecf1;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
        }

        .user-info .user-name {
            font-size: 14px;
            font-weight: 600;
        }

        .user-info .user-role {
            font-size: 11px;
            color: #888;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-icon-btn {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            border: 1px solid #e8ecf1;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 18px;
            color: #555;
            transition: all 0.2s;
            position: relative;
        }

        .header-icon-btn:hover {
            background: #f8f9fa;
        }

        .header-icon-btn .badge {
            position: absolute;
            top: -4px;
            right: -4px;
            width: 18px;
            height: 18px;
            background: #e74c3c;
            border-radius: 50%;
            font-size: 10px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: #f5f7fa;
            border-radius: 10px;
            padding: 10px 16px;
            gap: 8px;
            width: 280px;
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            font-family: 'Vazirmatn', sans-serif;
            font-size: 13px;
            width: 100%;
            color: #333;
        }

        .search-box .search-icon {
            color: #999;
            font-size: 16px;
        }

        .search-box .shortcut {
            font-size: 11px;
            color: #aaa;
            background: #fff;
            padding: 2px 8px;
            border-radius: 6px;
            border: 1px solid #e8ecf1;
        }

        /* ===== PAGE CONTENT ===== */
        .page-content {
            padding: 32px;
        }

        .page-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 32px;
        }

        .page-header-right h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .page-header-right p {
            font-size: 14px;
            color: #777;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: #fff;
            border: none;
            padding: 12px 28px;
            border-radius: 12px;
            font-family: 'Vazirmatn', sans-serif;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.4);
        }

        .btn-secondary {
            background: #fff;
            color: #555;
            border: 1px solid #e0e4e8;
            padding: 12px 28px;
            border-radius: 12px;
            font-family: 'Vazirmatn', sans-serif;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
        }

        .btn-secondary:hover {
            background: #f8f9fa;
            border-color: #ccc;
        }

        .btn-success {
            background: linear-gradient(135deg, #2dd4a8, #1abc9c);
            color: #fff;
            border: none;
            padding: 12px 28px;
            border-radius: 12px;
            font-family: 'Vazirmatn', sans-serif;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
            box-shadow: 0 4px 15px rgba(45, 212, 168, 0.3);
        }

        .btn-success:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(45, 212, 168, 0.4);
        }

        /* ===== FORM CARD ===== */
        .form-card {
            background: #fff;
            border-radius: 16px;
            border: 1px solid #e8ecf1;
            padding: 32px;
            margin-bottom: 24px;
        }

        .form-card-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-card-title .icon-circle {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .icon-blue {
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
        }

        .icon-green {
            background: rgba(45, 212, 168, 0.1);
            color: #2dd4a8;
        }

        .icon-purple {
            background: rgba(139, 92, 246, 0.1);
            color: #8b5cf6;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-row.single {
            grid-template-columns: 1fr;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            font-size: 13px;
            font-weight: 600;
            color: #444;
        }

        .form-group label .required {
            color: #e74c3c;
        }

        .form-control {
            padding: 12px 16px;
            border: 1.5px solid #e0e4e8;
            border-radius: 10px;
            font-family: 'Vazirmatn', sans-serif;
            font-size: 14px;
            outline: none;
            transition: all 0.2s;
            background: #fff;
            color: #333;
        }

        .form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .form-control::placeholder {
            color: #aaa;
        }

        select.form-control {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23999' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: left 16px center;
            padding-left: 40px;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        /* ===== ROLE CARDS GRID ===== */
        .roles-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .role-card {
            border: 2px solid #e8ecf1;
            border-radius: 14px;
            padding: 20px;
            cursor: pointer;
            transition: all 0.25s;
            position: relative;
            background: #fff;
        }

        .role-card:hover {
            border-color: #3b82f6;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.1);
        }

        .role-card.selected {
            border-color: #3b82f6;
            background: rgba(59, 130, 246, 0.03);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.12);
        }

        .role-card.selected::after {
            content: '✓';
            position: absolute;
            top: 12px;
            left: 12px;
            width: 26px;
            height: 26px;
            background: #3b82f6;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
        }

        .role-card-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 12px;
        }

        .role-card-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .role-card-icon.blue {
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
        }

        .role-card-icon.green {
            background: rgba(45, 212, 168, 0.1);
            color: #2dd4a8;
        }

        .role-card-icon.purple {
            background: rgba(139, 92, 246, 0.1);
            color: #8b5cf6;
        }

        .role-card-icon.orange {
            background: rgba(245, 158, 11, 0.1);
            color: #f59e0b;
        }

        .role-card-icon.red {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }

        .role-card-icon.teal {
            background: rgba(20, 184, 166, 0.1);
            color: #14b8a6;
        }

        .role-card-name {
            font-size: 15px;
            font-weight: 700;
        }

        .role-card-users {
            font-size: 12px;
            color: #888;
            margin-top: 2px;
        }

        .role-card-permissions {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-top: 8px;
        }

        .permission-tag {
            font-size: 11px;
            padding: 4px 10px;
            background: #f5f7fa;
            border-radius: 6px;
            color: #666;
        }

        /* ===== USER INFO CARD ===== */
        .user-info-card {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 20px;
            background: #f8f9fb;
            border-radius: 14px;
            border: 1px solid #e8ecf1;
        }

        .user-info-avatar {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            font-weight: 700;
        }

        .user-info-details h3 {
            font-size: 16px;
            font-weight: 700;
        }

        .user-info-details p {
            font-size: 13px;
            color: #888;
            margin-top: 2px;
        }

        .user-info-badge {
            margin-right: auto;
            padding: 6px 14px;
            background: rgba(45, 212, 168, 0.1);
            color: #2dd4a8;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
        }

        /* ===== CURRENT ROLES ===== */
        .current-roles {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 12px;
        }

        .current-role-tag {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            background: rgba(59, 130, 246, 0.08);
            color: #3b82f6;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 500;
        }

        .current-role-tag .remove-role {
            cursor: pointer;
            font-size: 14px;
            color: #e74c3c;
            font-weight: 700;
            transition: transform 0.2s;
        }

        .current-role-tag .remove-role:hover {
            transform: scale(1.2);
        }

        /* ===== FORM ACTIONS ===== */
        .form-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 12px;
            padding-top: 24px;
            border-top: 1px solid #e8ecf1;
            margin-top: 8px;
        }

        /* ===== TOAST NOTIFICATION ===== */
        .toast {
            position: fixed;
            bottom: 32px;
            left: 32px;
            background: #1a1a2e;
            color: #fff;
            padding: 16px 24px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            z-index: 1000;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.4s ease;
        }

        .toast.show {
            transform: translateY(0);
            opacity: 1;
        }

        .toast-icon {
            width: 32px;
            height: 32px;
            background: #2dd4a8;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1024px) {
            .roles-grid {
                grid-template-columns: 1fr;
            }
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
            .main-content {
                margin-right: 0;
            }
            .page-content {
                padding: 20px;
            }
        }

        /* ===== ANIMATIONS ===== */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-card {
            animation: fadeInUp 0.4s ease forwards;
        }

        .form-card:nth-child(2) { animation-delay: 0.1s; }
        .form-card:nth-child(3) { animation-delay: 0.2s; }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">🎓</div>
            <div>
                <div class="sidebar-title">سامانه فارغان</div>
                <div class="sidebar-subtitle">دانشگاه ملی</div>
            </div>
        </div>

        <div class="sidebar-section-title">اصلی</div>
        <ul class="sidebar-nav">
            <li><a href="#"><span class="nav-icon"></span> داشبورد</a></li>
        </ul>

        <div class="sidebar-section-title">مدیریت فارغان</div>
        <ul class="sidebar-nav">
            <li><a href="#"><span class="nav-icon">👥</span> لیست فارغان</a></li>
            <li><a href="#"><span class="nav-icon">➕</span> ثبت فارغ جدید</a></li>
        </ul>

        <div class="sidebar-section-title">ساختار پوهنځی ها</div>
        <ul class="sidebar-nav">
            <li><a href="#"><span class="nav-icon">️</span> مدیریت دانشکده‌ها</a></li>
            <li><a href="#"><span class="nav-icon">📖</span> مدیریت دیپارتمنت‌ها</a></li>
        </ul>

        <div class="sidebar-section-title">سیستم</div>
        <ul class="sidebar-nav">
            <li><a href="#" class="active"><span class="nav-icon">🛡️</span> مدیریت کاربران</a></li>
            <li><a href="#"><span class="nav-icon"></span> نقش‌ها و دسترسی‌ها</a></li>
            <li><a href="#"><span class="nav-icon">⚙️</span> تنظیمات</a></li>
        </ul>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <!-- TOP HEADER -->
        <header class="top-header">
            <div class="header-right">
                <div class="user-avatar">AE</div>
                <div class="user-info">
                    <div class="user-name">Alireza Ebrahimi</div>
                    <div class="user-role">Administrator</div>
                </div>
            </div>
            <div class="header-left">
                <div class="search-box">
                    <span class="search-icon">🔍</span>
                    <input type="text" placeholder="Search anything...">
                    <span class="shortcut">K</span>
                </div>
                <button class="header-icon-btn">
                    
                    <span class="badge">3</span>
                </button>
                <button class="header-icon-btn">⚙️</button>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- PAGE HEADER -->
            <div class="page-header">
                <div class="page-header-right">
                    <h1>اختصاص نقش به کاربر</h1>
                    <p>انتخاب کاربر و تعیین نقش‌های دسترسی برای ایشان</p>
                </div>
                <div style="display:flex; gap:10px;">
                    <button class="btn-secondary" onclick="window.history.back()">
                        ↩ بازگشت
                    </button>
                    <button class="btn-primary" onclick="saveRoles()">
                        💾 ذخیره تغییرات
                    </button>
                </div>
            </div>

            <!-- STEP 1: SELECT USER -->
            <div class="form-card">
                <div class="form-card-title">
                    <div class="icon-circle icon-blue">👤</div>
                    انتخاب کاربر
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>جستجوی کاربر <span class="required">*</span></label>
                        <select class="form-control" id="userSelect" onchange="selectUser(this.value)">
                            <option value="">— یک کاربر انتخاب کنید —</option>
                            <option value="1">احمد رحیمی — ahmad@example.com</option>
                            <option value="2">فاطمه نوری — fatemeh@example.com</option>
                            <option value="3" selected>محمد کریمی — mohammad@example.com</option>
                            <option value="4">سارا احمدی — sara@example.com</option>
                            <option value="5">علی حسینی — ali@example.com</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>دانشکده</label>
                        <select class="form-control">
                            <option>همه دانشکده‌ها</option>
                            <option>دانشکده انجنیری</option>
                            <option>دانشکده علوم</option>
                            <option>دانشکده حقوق</option>
                        </select>
                    </div>
                </div>

                <!-- Selected User Info -->
                <div class="user-info-card" id="userInfoCard">
                    <div class="user-info-avatar">MK</div>
                    <div class="user-info-details">
                        <h3>محمد کریمی</h3>
                        <p>mohammad@example.com — آخرین ورود: ۲ ساعت پیش</p>
                        <div class="current-roles">
                            <span class="current-role-tag">
                                کارشناس آموزش
                                <span class="remove-role" onclick="removeRole(this)">×</span>
                            </span>
                            <span class="current-role-tag">
                                مسئول فارغان
                                <span class="remove-role" onclick="removeRole(this)">×</span>
                            </span>
                        </div>
                    </div>
                    <div class="user-info-badge">✓ فعال</div>
                </div>
            </div>

            <!-- STEP 2: SELECT ROLES -->
            <div class="form-card">
                <div class="form-card-title">
                    <div class="icon-circle icon-green">🛡️</div>
                    انتخاب نقش‌ها
                </div>

                <div class="form-row single" style="margin-bottom: 20px;">
                    <div class="form-group">
                        <label>توضیحات (اختیاری)</label>
                        <textarea class="form-control" placeholder="دلیل اختصاص این نقش‌ها را بنویسید..."></textarea>
                    </div>
                </div>

                <div class="roles-grid">

                    <!-- Role Card 1 -->
                    <div class="role-card selected" onclick="toggleRole(this)">
                        <div class="role-card-header">
                            <div class="role-card-icon blue">🛡️</div>
                            <div>
                                <div class="role-card-name">مدیر سیستم</div>
                                <div class="role-card-users">۱ کاربر</div>
                            </div>
                        </div>
                        <div class="role-card-permissions">
                            <span class="permission-tag">مشاهده همه</span>
                            <span class="permission-tag">ویرایش همه</span>
                            <span class="permission-tag">حذف</span>
                            <span class="permission-tag">مدیریت کاربران</span>
                        </div>
                    </div>

                    <!-- Role Card 2 -->
                    <div class="role-card" onclick="toggleRole(this)">
                        <div class="role-card-header">
                            <div class="role-card-icon green">️</div>
                            <div>
                                <div class="role-card-name">کارشناس آموزش</div>
                                <div class="role-card-users">۶ کاربر</div>
                            </div>
                        </div>
                        <div class="role-card-permissions">
                            <span class="permission-tag">مشاهده فارغان</span>
                            <span class="permission-tag">ویرایش فارغان</span>
                            <span class="permission-tag">مدیریت دیپارتمنت‌ها</span>
                        </div>
                    </div>

                    <!-- Role Card 3 -->
                    <div class="role-card selected" onclick="toggleRole(this)">
                        <div class="role-card-header">
                            <div class="role-card-icon purple">🛡️</div>
                            <div>
                                <div class="role-card-name">مسئول فارغان</div>
                                <div class="role-card-users">۴ کاربر</div>
                            </div>
                        </div>
                        <div class="role-card-permissions">
                            <span class="permission-tag">مشاهده فارغان</span>
                            <span class="permission-tag">ثبت فارغ جدید</span>
                        </div>
                    </div>

                    <!-- Role Card 4 -->
                    <div class="role-card" onclick="toggleRole(this)">
                        <div class="role-card-header">
                            <div class="role-card-icon orange">🛡️</div>
                            <div>
                                <div class="role-card-name">کارشناس گزارش</div>
                                <div class="role-card-users"> کاربر</div>
                            </div>
                        </div>
                        <div class="role-card-permissions">
                            <span class="permission-tag">مشاهده گزارشات</span>
                            <span class="permission-tag">خروجی اکسل</span>
                        </div>
                    </div>

                    <!-- Role Card 5 -->
                    <div class="role-card" onclick="toggleRole(this)">
                        <div class="role-card-header">
                            <div class="role-card-icon red">🛡️</div>
                            <div>
                                <div class="role-card-name">مدیر دانشکده</div>
                                <div class="role-card-users"> کاربر</div>
                            </div>
                        </div>
                        <div class="role-card-permissions">
                            <span class="permission-tag">مدیریت دانشکده</span>
                            <span class="permission-tag">مشاهده گزارشات</span>
                            <span class="permission-tag">ویرایش دیپارتمنت</span>
                        </div>
                    </div>

                    <!-- Role Card 6 -->
                    <div class="role-card" onclick="toggleRole(this)">
                        <div class="role-card-header">
                            <div class="role-card-icon teal">🛡️</div>
                            <div>
                                <div class="role-card-name">کاربر عادی</div>
                                <div class="role-card-users">۱۲ کاربر</div>
                            </div>
                        </div>
                        <div class="role-card-permissions">
                            <span class="permission-tag">مشاهده پروفایل</span>
                            <span class="permission-tag">ویرایش پروفایل</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- STEP 3: SUMMARY & ACTIONS -->
            <div class="form-card">
                <div class="form-card-title">
                    <div class="icon-circle icon-purple">📋</div>
                    خلاصه و تأیید
                </div>

                <div style="display:grid; grid-template-columns: 1fr 1fr 1fr; gap:16px; margin-bottom: 20px;">
                    <div style="background:#f8f9fb; padding:16px; border-radius:12px; text-align:center;">
                        <div style="font-size:28px; font-weight:800; color:#3b82f6;">۱</div>
                        <div style="font-size:12px; color:#888; margin-top:4px;">کاربر انتخاب‌شده</div>
                    </div>
                    <div style="background:#f8f9fb; padding:16px; border-radius:12px; text-align:center;">
                        <div style="font-size:28px; font-weight:800; color:#2dd4a8;">۲</div>
                        <div style="font-size:12px; color:#888; margin-top:4px;">نقش انتخاب‌شده</div>
                    </div>
                    <div style="background:#f8f9fb; padding:16px; border-radius:12px; text-align:center;">
                        <div style="font-size:28px; font-weight:800; color:#8b5cf6;">۶</div>
                        <div style="font-size:12px; color:#888; margin-top:4px;">دسترسی tổngی</div>
                    </div>
                </div>

                <div class="form-actions">
                    <button class="btn-secondary" onclick="resetForm()">
                         بازنشانی
                    </button>
                    <button class="btn-success" onclick="saveRoles()">
                        ✅ ثبت و ذخیره نقش‌ها
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- TOAST -->
    <div class="toast" id="toast">
        <div class="toast-icon">✓</div>
        <span>نقش‌ها با موفقیت ذخیره شدند!</span>
    </div>

    <script>
        function toggleRole(card) {
            card.classList.toggle('selected');
        }

        function selectUser(value) {
            const users = {
                '1': { name: 'احمد رحیمی', email: 'ahmad@example.com', initials: 'AR', color: 'linear-gradient(135deg, #f093fb, #f5576c)' },
                '2': { name: 'فاطمه نوری', email: 'fatemeh@example.com', initials: 'FN', color: 'linear-gradient(135deg, #4facfe, #00f2fe)' },
                '3': { name: 'محمد کریمی', email: 'mohammad@example.com', initials: 'MK', color: 'linear-gradient(135deg, #667eea, #764ba2)' },
                '4': { name: 'سارا احمدی', email: 'sara@example.com', initials: 'SA', color: 'linear-gradient(135deg, #43e97b, #38f9d7)' },
                '5': { name: 'علی حسینی', email: 'ali@example.com', initials: 'AH', color: 'linear-gradient(135deg, #fa709a, #fee140)' },
            };

            if (users[value]) {
                const user = users[value];
                document.querySelector('.user-info-avatar').textContent = user.initials;
                document.querySelector('.user-info-avatar').style.background = user.color;
                document.querySelector('.user-info-details h3').textContent = user.name;
                document.querySelector('.user-info-details p').textContent = user.email + ' — آخرین ورود: همین الان';
            }
        }

        function removeRole(el) {
            el.parentElement.remove();
        }

        function saveRoles() {
            const toast = document.getElementById('toast');
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        function resetForm() {
            document.querySelectorAll('.role-card.selected').forEach(card => {
                card.classList.remove('selected');
            });
            document.getElementById('userSelect').value = '';
        }
    </script>

</body>
</html>