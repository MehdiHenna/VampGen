<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Character;
use App\Http\Requests;
use Auth;
use Session;

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
            if(!Auth::check()){
               Auth::loginUsingId(1);     
            }
            Session::put($request->except('_token'));
        return redirect('/clan');
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
            Session::put($request->except('_token'));
        return redirect('/disciplines');
    }
    public function getDisciplines(Request $request){
            //page choixattribut.blade.php
        return view('pages::disciplinesvampire');               
    }

    public function postDisciplines(Request $request) {
        //page attribut
        $validator = Validator::make(
            $request->all(),
            ['celerity' => 'required',
            'occultation' => 'required',
            'quietus' => 'required'
            ]);
        Session::put($request->except('_token'));
        return redirect('/choice-attributtes');
    }

    public function getChoiceAttributtes(Request $request){
        return view('pages::choixattribut');
    }

    public function postChoiseAttributtes(Request $request){
        // choix capacite
            $validator = Validator::make(
            $request->all(),
            ['talents' => 'required',
            'skills' => 'required',
            'knowledges' => 'required'
            ]);
        Session::put($request->except('_token'));    
        return redirect('/choice-abilities');               

    }

    public function getAttributes(Request $request){
        return view('pages::attribut');
    }

    public function postAttributes(Request $request){
        $validator = Validator::make(
            $request->all(),
            ['strength' => 'required',
            'dexterity' => 'required',
            'stamina' => 'required',
            'charisma' => 'required',
            'manipulation' => 'required',
            'appearence' => 'required',
            'perception' => 'required',
            'intelligence' => 'required',
            'wits' => 'required'
            ]);
        Session::put($request->except('_token'));
        return redirect('/choise-abilities');
    }

    public function getChoiceAbilities(Request $request){
        return view('pages::choixcapacite');
    }

    public function postChoiseAbilities(Request $request){
        $validator = Validator::make(
            $request->all(),
            ['talents' => 'required',
            'skills' => 'required',
            'knowledges' => 'required'  
            ]);
        Session::put($request->except('_token'));
        return redirect('/abilities');        
    }
    public function postAbilities (Request $request) {
        return view('pages::capacite');
    }
    public function getAbilities (Request $request) {
        $validator = Validator::make(
            $request->all(),
            ['Alertness' => 'required',
            'athletics' => 'required',
            'awareness' => 'required',
            'brawl' => 'required',
            'empathy' => 'required',
            'expression' => 'required',
            'intimidation' => 'required',
            'leadership' => 'required',
            'streetwise' => 'required',
            'subterfuge' => 'required',
            'animalKen' => 'required',
            'crafts' => 'required',
            'drive' => 'required',
            'etiquette' => 'required',
            'firearms' => 'required',
            'larceny' => 'required',
            'melee' => 'required',
            'performance' => 'required',
            'stealth' => 'required',
            'survival' => 'required',
            'academis' => 'required',
            'computer' => 'required',
            'finance' => 'required',
            'investigation' => 'required',
            'law' => 'required',
            'medecine' => 'required',
            'occult' => 'required',
            'politics' => 'required',
            'science' => 'required',
            'technology' => 'required'
            ]);
        Session::put($request->('_token'));
        return redirect('/historical');
    }
    public function getHistorical (Request $request) {
        return view('page::historique');
    }
    public function postHistorical (Request $request) {
        $validator = Validator::make(
            $request->all(),[
            'allies' => 'required',
            'contacts' => 'required',
            'generation' => 'required',
            'influence' => 'required',
            'mentor' => 'required',
            'renown' => 'required',
            'servants' => 'required',
            'satuts' => 'required',
            'herd' => 'required'
            ]);
        Session::put($request->('_token'));
        return redirect('/');
    }
}
