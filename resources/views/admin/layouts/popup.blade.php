@if (session('success'))
    <div
        style="
            background-color:#16a34a;
            color:#ffffff;
            border:1px solid #22c55e;
            border-radius:12px;
            padding:14px 16px;
            margin-bottom:16px;
            display:flex;
            align-items:center;
            gap:10px;
            box-shadow:0 10px 25px rgba(0,0,0,.15);
        ">
        <i class="fas fa-circle-check"></i>

        <span style="color:#ffffff;">
            {{ session('success') }}
        </span>
    </div>
@endif
