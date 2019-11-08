<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Student extends \Eloquent implements Authenticatable
{
	use AuthenticableTrait;
    
	public function classo(){

		return $this->belongsTo('App\Classo');

	}


}
