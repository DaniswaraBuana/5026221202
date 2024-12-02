<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::get('/hello', function () {
    return view('helloHtml/home');
});

Route::get('/style', function () {
    return view('style/home');
});

Route::get('/responsive', function () {
    return view('responsive/home');
});

Route::get('/form', function () {
    return view('form/home');
});

Route::get('/linktree', function () {
    return view('linktree/home');
});

Route::get('/ourClient', function () {
    return view('ourClient/home');
});
