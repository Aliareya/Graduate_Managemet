<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>گزارش فارغان</title>
    <style>
        @font-face {
            font-family: 'Vazir';
            src: url('{{ public_path("fonts/Vazir.ttf") }}') format('truetype');
            font-weight: normal;
        }
        @font-face {
            font-family: 'Vazir';
            src: url('{{ public_path("fonts/Vazir-Bold.ttf") }}') format('truetype');
            font-weight: bold;
        }

        body {
            font-family: 'Vazir', sans-serif;
            direction: rtl;
            text-align: right;
            font-size: 12px;
            color: #1e293b;
            background: #ffffff;
            padding: 28px 36px;
            line-height: 1.7;
        }

        .header-wrap {
            background: #1e3a5f;
            margin-bottom: 18px;
            padding: 20px 24px;
        }
        .header-wrap h1 {
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            margin: 0 0 6px 0;
        }
        .header-wrap p {
            font-size: 11px;
            color: #93c5fd;
            margin: 2px 0;
        }
        .header-badge {
            background: #2563eb;
            color: #ffffff;
            font-size: 10px;
            padding: 2px 8px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 18px;
            background: #f0f7ff;
            border: 1px solid #bfdbfe;
        }
        .info-table td {
            border: 1px solid #bfdbfe;
            padding: 7px 12px;
            font-size: 11px;
            color: #1e3a5f;
        }
        .info-table td strong {
            color: #1d4ed8;
        }

        .section-title {
            font-size: 13px;
            font-weight: bold;
            color: #1e3a5f;
            padding: 0 0 6px 0;
            margin-bottom: 10px;
            border-bottom: 2px solid #2563eb;
        }

        .report-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 11px;
            margin-bottom: 28px;
        }
        .report-table th {
            background: #1e3a5f;
            color: #ffffff;
            padding: 9px 7px;
            text-align: center;
            border: 1px solid #163259;
            font-size: 11px;
            font-weight: bold;
        }
        .report-table td {
            padding: 8px 7px;
            text-align: center;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .report-table .even { background: #f1f5ff; }
        .report-table .odd  { background: #ffffff; }
        .report-table .name-col {
            font-weight: bold;
            color: #1e3a5f;
            text-align: right;
        }
        .report-table .email-col {
            direction: ltr;
            font-size: 10px;
            color: #475569;
        }
        .report-table tfoot td {
            background: #f8faff;
            color: #64748b;
            font-size: 10.5px;
            text-align: center;
        }

        .sig-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            border-top: 2px solid #e2e8f0;
        }
        .sig-table td {
            border: none;
            padding: 18px 30px 0 30px;
            text-align: center;
            vertical-align: top;
            width: 50%;
        }
        .sig-name {
            font-size: 12px;
            font-weight: bold;
            color: #1e3a5f;
        }
        .sig-line-div {
            margin-top: 38px;
            border-bottom: 1px solid #94a3b8;
        }
        .sig-hint {
            font-size: 10px;
            color: #94a3b8;
            margin-top: 4px;
        }

        .footer-txt {
            text-align: center;
            font-size: 10px;
            color: #94a3b8;
            margin-top: 18px;
        }
    </style>
</head>

<body>

    <div class="header-wrap">
        <h1>گزارش فارغان دانشکده کمپیوتر ساینس</h1>
        <p>سیستم مدیریت فارغان &mdash; دانشگاه</p>
        <p>
            تاریخ تهیه گزارش: {{ now()->format('Y-m-d') }}
            &nbsp;&nbsp;
            <span class="header-badge">سال تحصیلی ۱۴۰۴</span>
        </p>
    </div>

    <table class="info-table">
        <tr>
            <td><strong>تعداد کل فارغان:</strong> {{ $graduates->count() }} نفر</td>
            <td><strong>دانشکده:</strong> کمپیوتر ساینس</td>
            <td><strong>وضعیت:</strong> نهایی</td>
            <td><strong>تاریخ چاپ:</strong> {{ now()->format('Y/m/d') }}</td>
        </tr>
    </table>

    <div class="section-title">فهرست فارغان</div>

    <table class="report-table">
        <thead>
            <tr>
                <th style="width:5%">#</th>
                <th style="width:20%">نام کامل</th>
                <th style="width:23%">ایمیل</th>
                <th style="width:14%">شماره تماس</th>
                <th style="width:22%">رشته تحصیلی</th>
                <th style="width:11%">سال فراغت</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($graduates as $graduate)
                @php
                    {{-- Safely decode department if it's stored as JSON --}}
                    $dept = $graduate->department;
                    if (is_string($dept)) {
                        $decoded = json_decode($dept, true);
                        if (json_last_error() === JSON_ERROR_NONE) {
                            $dept = $decoded['name'] ?? $decoded['title'] ?? (is_array($decoded) ? implode('، ', $decoded) : $dept);
                        }
                    }

                    {{-- Same for full_name if needed --}}
                    $fullName = $graduate->full_name;
                    if (is_string($fullName)) {
                        $decodedName = json_decode($fullName, true);
                        if (json_last_error() === JSON_ERROR_NONE && isset($decodedName['name'])) {
                            $fullName = $decodedName['name'];
                        }
                    }
                @endphp
                <tr class="{{ $loop->even ? 'even' : 'odd' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td class="name-col">{{ $fullName }}</td>
                    <td class="email-col">{{ $graduate->email }}</td>
                    <td>{{ $graduate->phone }}</td>
                    <td>{{ $dept }}</td>
                    <td>{{ $graduate->graduation_year }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align:center; padding:20px; color:#94a3b8;">
                        هیچ رکوردی یافت نشد
                    </td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                    مجموع: {{ $graduates->count() }} فارغ &nbsp;|&nbsp; {{ now()->format('Y-m-d') }}
                </td>
            </tr>
        </tfoot>
    </table>

    <table class="sig-table">
        <tr>
            <td>
                <p class="sig-name">امضاء مسئول سیستم</p>
                <div class="sig-line-div"></div>
                <p class="sig-hint">نام و تاریخ</p>
            </td>
            <td>
                <p class="sig-name">امضاء رئیس دانشکده</p>
                <div class="sig-line-div"></div>
                <p class="sig-hint">نام و تاریخ</p>
            </td>
        </tr>
    </table>

    <p class="footer-txt">
        این گزارش به صورت خودکار توسط سیستم مدیریت فارغان تولید شده است
        &mdash; {{ now()->format('Y-m-d H:i:s') }}
    </p>

</body>
</html>