<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'shop_id',
        'user_id',
        'body',
    ];

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
}
