<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');

        if (empty($username)) {
            return redirect()->route('dashboard', ['username' => 'Guest']);
        }else if (trim($username ?? '') === '') (
            $username = 'Guest');
        else {
            return redirect()->route('dashboard', ['username' => $username]);
        }
    }

    public function dashboard(Request $request)
    {
        $stats = [
            ['label' => 'Total Game',  'nilai' => 6],
            ['label' => 'Sedang Main', 'nilai' => 2],
            ['label' => 'Tamat',       'nilai' => 1],
        ];

        return view('dashboard', [
            'username' => $request->input('username', 'Guest'),
            'stats'    => $stats,
        ]);
    }

    public function profile(Request $request)
    {
        return view('profile', [
            'username' => $request->input('username', 'Guest'),
            'level'    => 'Pro Gamer',
            'favorit'  => 'Minecraft',
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $games = [
            ['judul' => 'Minecraft',        'genre' => 'Sandbox',   'platform' => 'PC',      'status' => 'Sedang Main', 'rating' => 9],
            ['judul' => 'Stardew Valley',   'genre' => 'Simulasi',  'platform' => 'PC',      'status' => 'Tamat',       'rating' => 10],
            ['judul' => 'COC',              'genre' => 'Simulasi perang', 'platform' => 'HP', 'status' => 'Prematur',     'rating' => 10],
            ['judul' => 'Growtopia',        'genre' => 'Simulasi', 'platform' => 'PC',      'status' => 'Sedang Main', 'rating' => 8],
            ['judul' => 'Mobile Legend',    'genre' => 'Moba', 'platform' => 'HP',    'status' => 'Belum Immo',       'rating' => 9],
            ['judul' => 'epep',             'genre' => 'BattleRoyale', 'platform' => 'HP',      'status' => 'Pensi',  'rating' => 8],
        ];

        return view('pengelolaan', [
            'username' => $request->input('username', 'Guest'),
            'games'    => $games,
        ]);
    }
}
