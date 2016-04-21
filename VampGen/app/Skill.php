<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function characters(){
    	return $this->belongsToMany(App\Character::class);
    }
}
