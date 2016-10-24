<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function types(){

    	return $this->belongsTo('App\Foodtypes');
    }
}
