<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name', 'description', 'picture', 'price','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
