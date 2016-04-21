<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function user(){
    	return $this->belongsTo(App\User::class);
    }
    public function skills(){
    	return $this->hasMany(App\Skill::class);
    }
}
