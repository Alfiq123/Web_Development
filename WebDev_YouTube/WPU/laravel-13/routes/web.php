<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home", ["title" => "Home Page"]);
});


Route::get("/about", function () {
    return view("about", ["title" => "About Page"]);
});


// TODO: Buat route untuk halaman blog dan contact
// 1. /blog
Route::get("/blog", function () {
    return view("blog", ["title" => "Blog Page"]);
});


// 2. /contact
Route::get("/contact", function () {
    return view("contact", ["title" => "Contact Page"]);
});