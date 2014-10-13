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
	$d = array();

	ajenjo::check(); if (ajenjo::checkLogin()) return ajenjo::clearURL();

	$d['head'] = ajenjo::$d;

	return View::make('hello',$d);
});


Route::get('/logout',function(){
	ajenjo::logout();
	return Redirect::to('/');
});