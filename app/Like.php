<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['user_id', 'shop_id','guruid'];

    public function Shop()
    {
      return $this->belongsTo('App\Shop');
    }

    public function User()
    {
      return $this->belongsTo(User::class);
    }
}
