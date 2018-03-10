<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
      'name', 'description', 'address', 'user_id', 'food_type_id', 'slug'
    ];

    public function creator(){
        return $this->belongsTo('App\User');
    }

    public function foodType(){
        return $this->belongsTo('App\FoodType');
    }

    public function menus(){
        return $this->hasMany('App\Menu');
    }
}
