@extends('layouts.app')

@section('title', 'Dashboard - Game Vault')

@section('content')
    <h1 style="font-size:20px;">Selamat datang, {{ $username }}!</h1>
    <p>Ini markas koleksi game-mu. Pilih menu di atas u ntuk mulai.</p>

    <div class="grid">
        @foreach ($stats as $stat)
            <div class="box" style="text-align:center;">
                <div class="pixel" style="font-size:24px;">{{ $stat['nilai'] }}</div>
                <div style="margin-top:8px;">{{ $stat['label'] }}</div>
            </div>
        @endforeach
    </div>
@endsection
