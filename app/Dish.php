<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'name','price', 'menuId'
    ];

    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
