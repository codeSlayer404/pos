<?php

Route::get('/', function(){
    return view('beranda') ;
}) ;
// Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');


    Route::resource('produk', 'produkController') ;

    Route::get('about', function(){
        return view('about') ;
    })->name('about') ;
    




