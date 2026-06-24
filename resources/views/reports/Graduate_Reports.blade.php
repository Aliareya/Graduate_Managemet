<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">

    <style>
        body {
            font-family: dejavusans;
            direction: rtl;
            font-size: 12px;
            color: #1c2b3a;
        }

        /* HEADER */
        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .header h2 {
            color: #0d2b55;
            font-size: 18px;
            margin-bottom: 4px;
        }

        .header p {
            font-size: 11px;
            color: #555;
        }

        /* META */
        .meta {
            text-align: center;
            font-size: 10px;
            margin-bottom: 12px;
            color: #666;
        }

        .meta span {
            margin: 0 6px;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #0d2b55;
            color: #ffffff;
            padding: 8px;
            font-size: 11px;
            border: 1px solid #ddd;
        }

        td {
            border: 1px solid #ddd;
            padding: 7px;
            text-align: center;
            font-size: 11px;
        }

        tr:nth-child(even) {
            background-color: #f5f7fa;
        }

        /* BADGES */
        .badge {
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 10px;
            color: #fff;
        }

        .male {
            background-color: #1a4480;
        }

        .female {
            background-color: #9c2060;
        }

        .status {
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 10px;
            color: #fff;
        }

        .employed {
            background-color: #2d6a4f;
        }

        .unemployed {
            background-color: #a05c00;
        }

        /* FOOTER */
        .footer {
            margin-top: 15px;
            text-align: center;
            font-size: 10px;
            color: #777;
            border-top: 1px solid #ddd;
            padding-top: 8px;
        }
    </style>
</head>

<body>

<!-- HEADER -->
<div class="header">
    <h2>دانشگاه علوم و تکنالوژی</h2>
    <p>گزارش رسمی فارغان</p>
</div>

<!-- META -->
<div class="meta">
    <span>تاریخ: {{ date('Y-m-d') }}</span> |
    <span>تعداد: {{ count($graduates) }}</span> |
    <span>وضعیت: رسمی</span>
</div>

<!-- TABLE -->
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>نام کامل</th>
            <th>ایمیل</th>
            <th>شماره</th>
            <th>جنسیت</th>
            <th>وضعیت کاری</th>
        </tr>
    </thead>

    <tbody>
        @foreach($graduates as $g)
        <tr>
            <td>{{ $loop->iteration }}</td>

            <td>{{ $g->first_name }} {{ $g->last_name }}</td>

            <td>{{ $g->email }}</td>

            <td>{{ $g->phone }}</td>

            <td>
                @if($g->gender == 'male')
                    <span class="badge male">مرد</span>
                @else
                    <span class="badge female">زن</span>
                @endif
            </td>

            <td>
                @if($g->is_employed == 'yes')
                    <span class="status employed">شاغل</span>
                @else
                    <span class="status unemployed">بیکار</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- FOOTER -->
<div class="footer">
    این گزارش به صورت خودکار توسط سیستم تولید شده است
</div>

</body>
</html>