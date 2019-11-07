<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    
	public function years(){

		return $this->belongsToMany('App\Year')->withPivot('subjects');

	}


}
