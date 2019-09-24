<?php
# @Date:   2019-09-24T13:36:40+01:00
# @Last modified time: 2019-09-24T14:22:32+01:00




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
    return view('welcome');
});

Route::get('/adam', function () {
    return view('welcome');
});

Route::get('/helloworld', function () {
    return '<p>Hello World</p>';
});

Route::get('/about', function () {
    return '<p>Hello World</p>';
});
