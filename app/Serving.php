<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serving extends Model
{
    protected $fillable = [
        'title', 'foodtype_id', 'user_id', 'restaurant_id', 'dueDate'
    ];

    public function creator(){
        return $this->belongsTo('App\User');
    }

    public function users(){
        return $this->hasMany('App\User');
    }

    public function restaurant(){
        return $this->hasOne('App\Restaurant');
    }

    public function foodType(){
        return $this->belongsTo('App\FoodType');
    }

    public function meals(){
        return $this->hasMany('App\Dish');
    }
}
