<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

Route::group(['middleware' => ['web']], function(){

	Route::controller('/', 'App\Http\Controllers\CharacterController');
	// Route::get('{page}.html', function($pages){return view('pages::'.$pages);});

	// Route::post('/form', function(Request $req){
	// 	return view('pages::clan')->with('old', $req);});
	

});