<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    public function chracters(){
    	return $this->hasMany(App\Character::class);
    }
    public function disciplines(){
    	return $this->belongsToMany(App\Discipline::class);
    }
}
