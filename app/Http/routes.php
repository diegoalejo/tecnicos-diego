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


Route::get("admin", function () {

	return view("example");
});

Route::get('/', function () {
    return view('welcome');
});

Route::get("peppa-pig", function () {
	return view("pig");
});

Route::get("{slug_url}" , function ($slugUrl) {
	return "post: " . $slugUrl;

});
