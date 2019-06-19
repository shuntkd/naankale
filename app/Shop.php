<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    protected $fillable = [
        'guruid',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
