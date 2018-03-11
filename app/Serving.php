<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Serving extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
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
