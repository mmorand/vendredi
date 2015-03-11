<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::controller('vendredi', 'VendrediController');

// 404 pages
App::missing(function()
{
	return Response::make('<p style="width:100%; text-align:center; margin-top:150px;"><img src="http://bluefaqs.com/wp-content/uploads/2009/11/css-tricks-404.jpg"/></p>', 404);
});