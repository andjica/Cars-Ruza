<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    //
    protected $guarded = [];
    
    public function cars()
    {
        return $this->hasMany(Car::class,'car_id','id');
    }
}
