<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Character;
use App\Http\Requests;

class CharacterController extends Controller
{
    public function getIndex(){
        //pages accueil
        return redirect('/character');
    }

    public function getCharacter(){
        return view('pages::accueil');
    }
    public function postCharacter(Request $request){
    	$validator = Validator::make(
            $request->all(),
            ['name' => 'required|max:20',
            'nature' => 'required',
            'demeanor' => 'required',
            'sire' => 'required|max:20',
            'chronicle' => 'required',
            'concept' => 'required',
            ]);
        return redirect('/clan')->with('old', $request);
    }

    public function getClan(Request $request){
        return view('pages::clan');
    }
    public function postClan(Request $request){
        //page clan.blade.php
            $validator = Validator::make(
            $request->all(),
            ['clan' => 'required',
            'sect' => 'required'
            ]);
        return redirect('/discplines')->with('old', $request);
    }
    public function getDisciplines(Request $request){
            //page choixattribut.blade.php
        return view('pages::disciplinesvampire');               
    }

    public function postChoiceAttributes(Request $request) {
        //page attribut
        $validator = Validator::make(
            $request->all(),
            ['celerity' => 'required',
            'occultation' => 'required',
            'quietus' => 'required'
            ]);
        return view('pages::choixattribut')->with('old', $request);
    }

    public function postAttributtes(Request $request){
        // choix capacite
            $validator = Validator::make(
            $request->all(),
            ['talents' => 'required',
            'skills' => 'required',
            'knowledges' => 'required'
            ]);
        return view('pages::attribut')->with('old', $request);               

    }

    public function postChoiceAbilities(Request $request){
        $validator = Validator::make(
            $request->all(),
            ['strength' => 'required',
            'dexterity' => 'required',
            'stamina' => 'required',
            'charisma' => 'required',
            'manipulation' => 'required',
            'appearence' => 'required',
            'intelligence' => 'required',
            'wits' => 'required'
            ]);
        return view('pages::choixcapacite')->with('old', $request);
    }

    public function postAdvantages(Request $request){
        
    }
    

    public function postSkills (Request $request) {

    }
}
