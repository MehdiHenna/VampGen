<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

Route::group(['middleware' => ['web']], function(){
	Route::get('{page}.html', function($pages){return view('pages::'.$pages);});
});