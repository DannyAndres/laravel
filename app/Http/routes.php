<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('index', 'IndexController');

/*Route::get('/', [
    'uses'  =>  'Controller@form'
]);

Route::get('battle', 'battle@battle');

Route::post('home', [
    'uses'  =>  'Controller@view'
]);

Route::get('ranking', function () {
    return view('ranking');
});*/
