<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Character extends Model
{

	

	protected $table = 'characters';

	protected $guarded = ['id', 'user_id', 'clan_id'];

	protected $date = ['created_at', 'update_at', 'deleted_at'];

	




    public function user(){
    	return $this->belongsTo(App\User::class);
    }
    public function skills(){
    	return $this->belongsToMany(App\Skill::class, 'characters_has_skills');
    }
}
