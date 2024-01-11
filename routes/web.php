<?php

use Illuminate\Support\Facades\Route;

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
    $page_title = "Welcome to Laravel";
    $class_num = 108;

    $data=[
        'title' => $page_title,
        'class_num' => $class_num,
        'students' => [
            'Pippo',
            'Pluto',
            'Paperino'
        ],
    ];
    return view('home', $data);
});

Route::get('/about', function(){
    return view('about');
});
