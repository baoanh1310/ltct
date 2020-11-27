<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::prefix('admin')->group(function (){
    Route::prefix('categories')->group(function (){ // render categories/create ...
        Route::get('/create',[
            'as'=>'categories.create', // name
            'uses'=>'CategoryController@create' // controller
        ]);
    });
    Route::prefix('contact')->group(function (){
        Route::get('/index',[
           'as'=>'contact.index',
           'uses'=>'AdminContactController@index'
        ]);
        Route::post('/update/{id}',[
           'as'=>'contact.update',
           'uses'=>'AdminContactController@update'
        ]);
        Route::post('/create',[
            'as'=>'contact.create',
            'uses'=>'AdminContactController@create'
        ]);
        Route::delete('/delete/{id}',[
           'as'=>'contact.delete',
           'uses'=>'AdminContactController@delete'
        ]);
        Route::post('/state/{id}',[
            'as'=>'contact.state',
            'uses'=>'AdminContactController@state'
        ]);
    });
});

