<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\PseudoTypes\True_;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', function () {
    $games = [
        ["name" => "Path of Exile", "studio" => "Grinding Gear Games", "id" => "1"],
        ["name" => "Marvel Rivals", "studio" => "NetEase Games", "id" => "2"],
        ["name" => "Balatro", "studio" => "LocalThunk", "id" => "3"]
    ];
    return view('games.index', ["greeting" => True, "games" => $games]);
});

Route::get('/games/add', function () {
    return view('games.add');
});

Route::get('/games/{id}', function ($id) {
    // fetch game with id
    return view('games.show', ["id" => $id]);
});
