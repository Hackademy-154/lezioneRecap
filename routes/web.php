<?php

//Il web.php è il punto di entrata di TUTTE LE RICHIESTE LATO CLIENT
//Framework cassetta degli attrezzi
//Convention over configuration
//Npm = Node package manager delle lbrerie css e js
//Composer = package manager dele librerie php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');

//Rotta,Controller,Vista
Route::get('/students/index', [StudentController::class, 'index'])->name('studentIndex');
Route::get('/student/detail/{id}', [StudentController::class, 'show'])->name('studentShow');