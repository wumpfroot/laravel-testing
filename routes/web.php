<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\PseudoTypes\True_;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    $games = [
        ["name" => "Path of Exile", "studio" => "Grinding Gear Games", "id" => "1"],
        ["name" => "Marvel Rivals", "studio" => "NetEase Games", "id" => "2"],
        ["name" => "Balatro", "studio" => "LocalThunk", "id" => "3"]
    ];
    return view('info.index', ["greeting" => True, "games" => $games]);
});

Route::get('/info/{id}', function ($id) {
    // fetch game with id
    return view('info.show', ["id" => $id]);
});
