<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home");
});


Route::get("/about", function () {
    return view("about", ["nama" => "Fauzi Taufiq"]);
});


// TODO: Buat route untuk halaman blog dan contact
// 1. /blog
Route::get("/blog", function () {
    return view("blog");
});


// 2. /contact
Route::get("/contact", function () {
    return view("contact");
});