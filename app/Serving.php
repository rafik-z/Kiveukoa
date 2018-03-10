<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serving extends Model
{
    protected $fillable = [
        'title', 'foodTypeId', 'userId', 'restaurantId', 'dueDate'
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
}
