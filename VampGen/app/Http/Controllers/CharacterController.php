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

    public function postClans(Request $request){
        $data = Clans::create([
            'id' => $request->get('id'),
            'name' => $request->get('name'),
            ])

    }

    public function PostDisciplines (Request $request){
        $data= Disciplines::create([
            'id' => $request->get('id'),
            'name' => $request->get('name'),
            'max' => $request->get('max'),
            ]);
    }

    public function postSkills (Request $request) {
        $data = Skills::create([
            'id' => $resquest->get('id'),
            'name' => $request->get('name'),
            'max' => $request->get('max')
            ]);
    }
}
