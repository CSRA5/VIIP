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

Route::get('/', function () {
    return view('index');
});


/* Company
*/
Route::get('empresa', function () {
    return view('company');
});


/*
Tours
*/
Route::get('nuestros-tours', function () {
    return view('tours/list-tours');
});

/*
End tours
*/

/*Guide
*/

Route::get('guia-turistica/ica', function () {
    return view('guide/ica');
});

/*
End Guide*/

