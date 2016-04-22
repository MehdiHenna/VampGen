<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i= 0; $i < 100; $i++) {
    		DB::table('characters')->insert([
    			'nature' =>	str_random(10),
    			'demeanor' => str_random(10),
    			'concept' => str_random(10),
    			'sire' => str_random(10),
    			'name' => str_random(10),

    			]);
    	}
    	$clans=['Ventrue','Assamite','Tremere','Lasombra','Followers of Set','Malkavian','Brujah', 'Toreador','Tzimisce','Nosferatu','Giovanni','Gangrel','Ravnos'];
    	foreach ($clans as $clan) {
        	# code...
    		DB::table('clans')->insert([
    			'name'=> $clan,

    			]);
    	}
    	$disciplines = ['Abombwe', 'Animalism', 'Auspex', 'Bardo', 'Celerity', 'Chimerstry', 'Daimonion', 'Dementation', 'Dominate', 'Flight', 'Fortitude', 'Melpominee ', 'Mytherceria', 'Obeah', 'Obfuscate', 'Obtenebration', 'Potence', 'Presence', 'Protean', 'Quietus', 'Sanguinus', 'Serpentis', 'Spiritus', 'Temporis', 'Thanatosis', 'Valeren', 'Vicissitude', 'Visceratika']; 
    	foreach ($disciplines as $d) {
    		DB::table('disciplines')->insert([

    			'name' => $d,
    			'max' => rand(1, 5),

    			]);
    	}
    	$skills = ['Athletics','Brawl', 'Dodge','Animal_Ken','Empathy','Expression','Intimidation','Leadership','Streetwise','Subterfuge', 'Crafts','Drive','Etiquette', 'Firearms', 'Larceny', 'Melee', 'Performance', 'Stealth', 'Survival','Academics', 'Bureaucracy', 'Computer', 'Finance', 'Investigation', 'Law', 'Linguistics', 'Medicine', 'Occult', 'Politics', 'Research', 'Science'];
    	foreach ($skills as $skill) {

    		DB::table('skills')->insert([
    			'name'=> $skill,
    			]);
    	}


    }
}
