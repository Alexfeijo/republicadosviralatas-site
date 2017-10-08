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
  // URL::forceScheme('https');

Route::get('/', function () {
	$imgs = [
		'e01.jpg',
		'e02.jpg',
		'e03.jpg',
		'e04.jpg',
		'e05.jpg',
		'e06.jpg',
		'e07.jpg',
		'e08.jpg',
		'e09.jpg',
		'e10.jpg',
		'e11.jpg',
		'e12.jpg',
	];
    return view('welcome', ['images' => $imgs]);
});

Route::post('/', ['as' => 'send.contact', 'uses' => 'HomeController@send']);
