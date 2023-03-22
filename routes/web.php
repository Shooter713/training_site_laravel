<?php

use Illuminate\Support\Facades\Route;

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::group(['middleware'=>'auth'], function ($route){

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');

    Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
    Route::get('/logout', 'App\Http\Controllers\UsersController@logout')->name('logout');


    Route::get('/contact/all/{id}',
        'App\Http\Controllers\ContactController@showOneMessage')->name('contact-data-one');

    Route::get('/contact/all/{id}/update',
        'App\Http\Controllers\ContactController@updateMessage')->name('contact-data-update');

    Route::get('/contact/all/{id}/delete',
        'App\Http\Controllers\ContactController@deleteMessage')->name('contact-data-delete');

    Route::post('/contact/all/{id}/update',
        'App\Http\Controllers\ContactController@updateMessageSubmit')->name('contact-data-update-submit');

    
});




Route::post('/registration/add', 'App\Http\Controllers\ContactController@add')->name('contact-form-new-user');
Route::post('/registration/login', 'App\Http\Controllers\UsersController@login')->name('contact-form-login');








//Route::post('/registration/add', 'App\Http\Controllers\ContactController@addNewUser')->name('contact-form-new-user');
