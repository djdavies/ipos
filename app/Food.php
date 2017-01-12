<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    /**
     * Get the order that owns the foods.
     */
    public function food()
    {
        return $this->belongsTo('App\Food');
    }
}
