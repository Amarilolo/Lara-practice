<?php
use App\Http\Controllers\StagiairesController;
use App\Http\Controllers\NoteController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



    Route::resource('Stagiaires', StagiairesController::class);