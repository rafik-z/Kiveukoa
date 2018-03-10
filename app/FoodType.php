<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    protected $fillable = [
        'name', 'slug', 'user_id'
    ];

    public function creator(){
        return $this->belongsTo('App\User');
    }

    public function restaurants(){
        return $this->hasMany('App\Restaurant');
    }
}
