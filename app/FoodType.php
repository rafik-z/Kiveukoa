<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodType extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
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
