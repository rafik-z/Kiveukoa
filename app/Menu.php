<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $fillable = [
        'name', 'restaurant_id', 'user_id'
    ];

    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    public function creator()
    {
        return $this->belongsTo('App\User');
    }

    public function dishes(){
        return $this->hasMany('App\Dish');
    }
}
