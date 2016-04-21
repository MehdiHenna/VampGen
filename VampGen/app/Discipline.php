<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
	public function clans(){
		return $this->belongsToMany(App\Clan::class);
	}
}
