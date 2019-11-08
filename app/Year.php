<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    
	public function classos(){

		return $this->hasMany('App\Classo');

	}

}
