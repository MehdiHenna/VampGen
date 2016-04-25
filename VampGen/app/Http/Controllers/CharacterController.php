<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use App\Http\Requests;

class CharacterController extends Controller
{
    public function postCharacter(Request $request){
    	$data = Character::create([
    		'id' => $request->get('id'),
    		'name' => $request->get('name'),
    		'nature' => $request->get('nature'),
    		'demeanor' => $request->get('demeanor'),
    		'sire' => $request->get('sire'),
			

    		]);
    	return redirect('/profil');
    }
}
