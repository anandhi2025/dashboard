<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/master', function () {
    return view('admin.index');
});
Route::get('/buttons', function () {
    return view('admin.buttons');
});
Route::get('/dropdowns', function () {
    return view('admin.dropdowns');
});
Route::get('/typography', function () {
    return view('admin.typography');
});
Route::get('/typography', function () {
    return view('admin.typography');
});
Route::get('/fontawesome', function () {
    return view('admin.fontawesome');
});
Route::get('/forms', function () {
    return view('admin.forms');
});
Route::get('/charts', function () {
    return view('admin.charts');
});
Route::get('/basictable', function () {
    return view('admin.basictable');
});

Route::get('/blankpage', function () {
    return view('admin.blank');
});

Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/register', function () {
    return view('admin.register');
});
Route::get('/error404', function () {
    return view('admin.error404');
});
Route::get('/error500', function () {
    return view('admin.error500');
});

Route::get('/', function () {
    return view('frontend.welcome');
});