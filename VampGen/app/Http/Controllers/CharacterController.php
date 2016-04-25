<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use App\Http\Requests;

class CharacterController extends Controller
{

    public function getIndex(){
        return view('pages::accueil');
    }

    public function postCharacter(Request $request){
        
    	$this->validate($request,[
    	
    		'name' => 'require|max:20',
    		'nature' => 'require',
    		'demeanor' => 'require',
    		'sire' => 'require|max:20',
            'chronicle' => 'require',
			'concept' => 'concept',


    		]);
    	return view('page::clan')->with('old', $request);
    }

    public function postClans(Request $request){
        $data = Clans::create([
            'id' => $request->get('id'),
            'name' => $request->get('name'),
            ]);

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
