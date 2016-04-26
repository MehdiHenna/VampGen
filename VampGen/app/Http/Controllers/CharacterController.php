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
    public function postIndex(Request $request){
        return view('pages::accueil')->with('old', $request);
    }
    public function postCharacter(Request $request){
        
    	$this->validate($request,[
    	   'page'=>'required',

    		'name' => 'required|max:20',
    		'nature' => 'required',
    		'demeanor' => 'required',
    		'sire' => 'required|max:20',
            'chronicle' => 'required',
			'concept' => 'required',


    		]);
    	return view('pages::clan')->with('old', $request);
    }
    public function postClans(Request $request){
        $this->validate($request,[
                'clan' => 'required',
                'sect' => 'required',
            ]);
        return view('pages::capacitevampire')->with('old', $request);               

    }

    public function postDisciplines(Request $request) {
        $this->validate($request,[
                'Disciplines1' => 'required',
                'Disciplines2' => 'required',
                'Dispcilines3' => 'required',
            ]);
        return view('pages::choixattribut')->with('old', $request);
    }

    public function postChoiceCapacities(Request $request){
        $this->validate($request,[
                'talents' => 'required',
                'skills' => 'required',
                'knowledges' => 'required'
            ]);
        return view('pages::attribut')->with('old', $request);               

    }


    

    public function postSkills (Request $request) {
        $data = Skills::create([
            'id' => $resquest->get('id'),
            'name' => $request->get('name'),
            'max' => $request->get('max')
            ]);
    }
}
