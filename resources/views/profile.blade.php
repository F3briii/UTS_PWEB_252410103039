@extends('layouts.app')

@section('title', 'Profile - Game Vault')

@section('content')
    <div class="box" style="max-width:480px; margin:24px auto;">
        <h1 style="font-size:18px; margin-top:0;">PROFILE</h1>

        <p><strong>Username:</strong> {{ $username }}</p>
        <p><strong>Level:</strong> {{ $level }}</p>
        <p><strong>Game favorit:</strong> {{ $favorit }}</p>

        <a href="{{ route('dashboard', ['username' => $username]) }}">&larr; Kembali ke Dashboard</a>
    </div>
@endsection
