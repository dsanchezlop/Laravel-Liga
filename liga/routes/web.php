<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

Route::get('/',                 function () { 
    return view('welcome'); });
Route::get('/home',             function () { 
    return view('welcome'); });
Route::get('/mngtms',           [TeamController::class, 'list']);
Route::get('/addteam',          function () { 
    return view('teams/addteam'); });
Route::get('/team/{id}/edit',   [TeamController::class, 'edit']);
Route::get('/team/{id}/delete', [TeamController::class, 'remove']);

Route::post('/teams/addteam',       [TeamController::class, 'add']);
Route::post('/team/{id}/update',    [TeamController::class, 'update']);

Route::get('/mngplrs',              [PlayerController::class, 'list']);
Route::get('/addplayer',            function () { 
    return view('players/addplayer'); });
Route::get('/player/{id}/edit',     [PlayerController::class, 'edit']);
Route::get('/player/{id}/delete',   [PlayerController::class, 'remove']);

Route::post('/players/addplayer',   [PlayerController::class, 'add']);
Route::post('/player/{id}/update',  [PlayerController::class, 'update']);
