<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Get the drinks for the order.
     */
    public function drinks()
    {
        return $this->hasMany('App\Drink');
    }

    /**
     * Get the foods for the order.
     */
    public function foods()
    {
        return $this->hasMany('App\Food');
    }
}
