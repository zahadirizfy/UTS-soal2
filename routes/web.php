<?php
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $response = Http::get('https://v2.jokeapi.dev/joke/Programming?type=single');

    if ($response->successful()) {
        $joke = $response->json()['joke'];
        return view('joke', ['joke' => $joke]);
    } else {
        return "Gagal mengambil data.";
    }
});
