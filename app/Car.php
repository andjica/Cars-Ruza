<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function motor()
    {
        return $this->hasOne(Motor::class,'car_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class,'car_colors');
    }

}
