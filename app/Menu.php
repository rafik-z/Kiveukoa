<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $fillable = [
        'name', 'restaurantId', 'userId'
    ];

    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    public function creator()
    {
        return $this->belongsTo('App\User');
    }
}
