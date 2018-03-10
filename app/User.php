<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'administrator', 'avatar'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function servings()
    {
        return $this->belongsToMany('App\Serving');
    }

    public function menus()
    {
        return $this->hasMany('App\Menu');

    }

    public function dishes(){
        return $this->hasMany('App\Dish');
    }

    public function foodType(){
        return $this->hasMany('App\FoodType');
    }

    public function restaurants(){
        return $this->hasMany('App\Restaurant');
    }
}
