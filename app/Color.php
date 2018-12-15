<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_colors');
    }
}
