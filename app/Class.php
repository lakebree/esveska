<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    
	public function school(){

		return $this->belongsTo('App\School');

	}

	public function students(){

		return $this->hasMany('App\Student');

	}

	public function year(){

		return $this->belongsTo('App\Year');

	}

}
