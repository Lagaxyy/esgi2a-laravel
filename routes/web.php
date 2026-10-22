<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "name" => "Arthur LAO",
        "competences" => ["Laravel", "Blade", "TailwindCSS"],
        "available" => true,
    ]);
})->name("home");

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
