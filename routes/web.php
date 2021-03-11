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

Route::get('/', 'RouteController@index');
Route::get('/meow', function () { return view('meow'); });
Route::get('/woof', function () { return view('woof'); });
Route::get('/fox', function () { return view('fox'); });
Route::get('/comingsoon', function () { return view('comingsoon'); });

Route::prefix('contact')->group(function () {
    Route::get('/', 'ContactFormController@create');
    Route::post('/', 'ContactFormController@store');
    
    Route::get('sent', 'ContactFormController@sent')->name('sent');
    Route::get('discord', 'ContactFormController@discord')->name('discord');
});
// Route::get('contact', 'ContactFormController@create');
// Route::get('thanks', '')->name('thanks');
// Route::post('contact', 'ContactFormController@store');

/* Permanent redirects */
Route::permanentRedirect('/projects/invite/veidus', 'https://veidus.com/invite/stable');
Route::permanentRedirect('/projects/invite/canary', 'https://veidus.com/invite/canary');
Route::permanentRedirect('/discord', 'https://discord.gg/4K4DYM5');
/* Permanent redirects */