<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    /**
     * Get the order that owns the drinks.
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
