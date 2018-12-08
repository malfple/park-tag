<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    class User extends Authenticatable{
        public function payments(){
            return $this->hasMany('App\Payment');
        }
        public function places(){
            return $this->belongsToMany('App\Place');
        }
        public function promos(){
            return $this->belongsToMany('App\Promo');
        }
    }
}
