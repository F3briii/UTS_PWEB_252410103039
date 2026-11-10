@extends('layouts.app')

@section('title', 'Koleksi - Game Vault')

@section('content')
    <h1 style="font-size:20px;">Koleksi Game {{ $username }}</h1>

    <div class="grid">
        @foreach ($games as $game)
            <div class="box">
                <h2 style="font-size:14px; margin-top:0;">{{ $game['judul'] }}</h2>
                <p>Genre: {{ $game['genre'] }}</p>
                <p>Platform: {{ $game['platform'] }}</p>
                <p>Status: <strong>{{ $game['status'] }}</strong></p>
                <p>Rating: {{ $game['rating'] }}/10</p>
            </div>
        @endforeach
    </div>
@endsection
