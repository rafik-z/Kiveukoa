<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dish extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name','price', 'menu_id'
    ];

    public function menu(){
        return $this->belongsTo('App\Menu');
    }

    public function meals(){
        return $this->belongsToMany('App\Dish');
    }
}
