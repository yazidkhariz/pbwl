<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('home/index', function () {
    return view('Home/index');
});

Route::get('about', function(){
    return view('about');
});

Route::get('mahasiswa', function () {
    $nim = [111,112,123];
    $nama = ['yazid','khairul','rizal'];
    return view('mahasiswa',[
        'nim' => $nim,
        'nama' => $nama
    ]);
}); 

Route::get('profile', function(){
    return view('profile');
});