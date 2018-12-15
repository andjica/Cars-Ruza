<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function cars()
    {
        return $this->hasMany(Car::class,'category_id','id');
    }
}
