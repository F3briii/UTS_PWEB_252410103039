@props(['username'])

<nav style="background:#3b7d2c; border-bottom:4px solid #000; padding:12px 24px;
            display:flex; flex-wrap:wrap; gap:16px; align-items:center;">
    <span class="pixel" style="font-size:14px;">KOLEKSI GAME</span>

    <a href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
    <a href="{{ route('pengelolaan', ['username' => $username]) }}">Koleksi</a>
    <a href="{{ route('profile', ['username' => $username]) }}">Profile</a>

    <span style="margin-left:auto;">Player: {{ $username }}</span>
</nav>
