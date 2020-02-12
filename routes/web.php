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
    return view('home');
});

//Departemen
Route::get('/depagsos', function () {
    return view('depagsos');
});
Route::get('/dephumas', function () {
    return view('dephumas');
});
Route::get('/depkebdes', function () {
    return view('depkebdes');
});
Route::get('/depkominfo', function () {
    return view('depkominfo');
});
Route::get('/depol', function () {
    return view('depol');
});
Route::get('/depsarpras', function () {
    return view('depsarpras');
});
Route::get('/depsenbud', function () {
    return view('depsenbud');
});
Route::get('/diptek', function () {
    return view('diptek');
});
Route::get('/dpdk', function () {
    return view('dpdk');
});