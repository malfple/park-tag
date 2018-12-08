<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public function users(){
    	return $this->belongsToMany('App\User');
    }
    public function payment(){
    	return $this->belongTo('App\Payment');
    }
}
