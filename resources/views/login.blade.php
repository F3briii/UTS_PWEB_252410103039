@extends('layouts.app')

@section('title', 'Login - Game Vault')

@section('content')
    <div class="box" style="max-width:400px; margin:60px auto;">
        <h1 style="font-size:20px; text-align:center; margin-top:0;">GAME VAULT</h1>
        <p style="text-align:center;">Masukkan username untuk mulai</p>

        <form action="{{ route('login.proses') }}" method="POST">
            @csrf
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="input">

            <button type="submit" class="btn pixel">START</button>
        </form>
    </div>
@endsection
