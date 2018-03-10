<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
      'name', 'description', 'address', 'userId', 'foodTypeId', 'slug'
    ];

    public function creator(){
        return $this->belongsTo('App\User');
    }

    public function foodType(){
        return $this->hasOne('App\FoodType');
    }

    public function menus(){
        return $this->hasMany('App\Menu');
    }
}
