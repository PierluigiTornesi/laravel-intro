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
    return view('home.index', $data);
});

Route::get('/about', function(){
    return view('home.about');
});


//con compact non serve dover creare $data
//scrivo direttamente il nome delle variabili sotto forma di stringa e posso utilizzarle cosi come sono nel rispettivo file
Route::get('/compact', function(){
    $title = 'Example of compact';
    $name = 'Pierluigi';
    $like_blade = true;
    $students = [
        [
            'name' => 'Pippo',
            'lastname' => 'Bianchi',
        ],
        [
            'name' => 'Pluto',
            'lastname' => 'Neri',
        ],
        [
            'name' => 'Paperino',
            'lastname' => 'Verdi',
        ]
    ];

    return view('home.compact',compact('title','name','like_blade','students'));
});
