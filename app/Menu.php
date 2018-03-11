<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

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
