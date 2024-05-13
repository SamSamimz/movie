<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/show', function () {
//     return view('show');
// });



Route::get('/',[MoviesController::class,'index'])->name('movies.index');
Route::resource('movies',MoviesController::class);


