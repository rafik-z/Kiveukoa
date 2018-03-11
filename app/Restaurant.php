<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'name', 'description', 'address', 'user_id', 'food_type_id', 'slug'
    ];

    protected $dates = ['deleted_at'];

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
