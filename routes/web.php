<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/about-us', function () {
    return view('layouts.about-us');
});

Route::get('/projects', function () {
    return view('layouts.projects');
});

Route::get('/services', function () {
    return view('layouts.services');
});

Route::get('/contacts', function () {
    return view('layouts.contacts');
});
