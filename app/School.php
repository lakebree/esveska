<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    
	public function departments(){

		return $this->belongsToMany('App\Department');

	}

	public function classes(){

		return $this->hasMany('App\Class');

	}

}
