<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Laravel POS' }}</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 960px; margin: 0 auto; padding: 24px; color: #1f2937; }
        nav { display:flex; gap:16px; margin-bottom:28px; padding-bottom:14px; border-bottom:1px solid #d1d5db; }
        a { color:#1d4ed8; text-decoration:none; } a:hover { text-decoration:underline; }
        table { width:100%; border-collapse:collapse; margin-top:16px; } th, td { padding:12px; border:1px solid #d1d5db; text-align:left; }
        th { background:#1e3a8a; color:white; } form { max-width:520px; } label { display:block; margin-top:16px; font-weight:bold; }
        input { width:100%; box-sizing:border-box; padding:10px; margin-top:6px; } button { margin-top:18px; padding:10px 16px; background:#1d4ed8; color:#fff; border:0; cursor:pointer; }
        .error { color:#b91c1c; margin:4px 0; } .success { color:#166534; background:#dcfce7; padding:10px; margin-bottom:14px; }
        .avatar { width:56px; height:56px; object-fit:cover; border-radius:50%; background:#e5e7eb; vertical-align:middle; }
    </style>
</head>
<body>
    <nav><a href="{{ route('customers.index') }}">Customers</a><a href="{{ route('users.index') }}">User Accounts</a></nav>
    @if(session('success')) <div class="success">{{ session('success') }}</div> @endif
    @yield('content')
</body>
</html>
