<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Game Vault')</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0; font-family: 'Inter', sans-serif; background: #5b3a1e; color: #fff;
            display: flex; flex-direction: column; min-height: 100vh;
        }
        h1, h2, .pixel { font-family: 'Press Start 2P', monospace; line-height: 1.6; }
        main { flex: 1; padding: 24px; }
        a { color: #fff; }
        .box {
            background: #7a7a7a; border: 4px solid #000; box-shadow: 6px 6px 0 #000;
            padding: 24px; border-radius: 0;
        }
        .btn {
            width: 100%; padding: 12px; background: #3b7d2c; color: #fff; font-size: 12px;
            border: 4px solid #000; box-shadow: 4px 4px 0 #000; cursor: pointer; border-radius: 0;
        }
        .input {
            width: 100%; padding: 10px; margin: 8px 0 16px; border: 4px solid #000; border-radius: 0;
        }
        .grid { display: flex; flex-wrap: wrap; gap: 16px; margin-top: 24px; }
        .grid > * { flex: 1 1 220px; }
    </style>
</head>
<body>
    @isset($username)
        <x-navbar :username="$username" />
    @endisset

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
