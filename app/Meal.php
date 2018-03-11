<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
        'user_id', 'serving_id', 'dish_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function serving(){
        return $this->belongsTo('App\Serving');
    }

    public function dishes(){
        return $this->hasMany('App\Dish');
    }
}
