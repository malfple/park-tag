<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function promos(){
    	return $this->hasMany('App\Promo');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function place(){
    	return $this->belongsTo('App\Place');
    }
}
