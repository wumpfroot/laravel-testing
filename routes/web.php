<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    $games = [
        ["name" => "Path of Exile", "studio" => "Grinding Gear Games", "id" => "1"],
        ["name" => "Marvel Rivals", "studio" => "NetEase Games", "id" => "2"],
        ["name" => "Balatro", "studio" => "LocalThunk", "id" => "3"]
    ];
    return view('info.index', ["greeting" => "sup, how you doing", "games" => $games]);
});

Route::get('/info/{id}', function ($id) {
    // fetch game with id
    return view('info.show', ["id" => $id]);
});
