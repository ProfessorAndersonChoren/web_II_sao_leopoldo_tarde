<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get("/book", [BookController::class,'index'])->name('book.index');
Route::get("/book/create", [BookController::class, 'create'])->name('book.create');
