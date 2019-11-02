<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{

    protected $fillable= ['user_id', 'gst', 'total', 'city', 'country', 'first_name', 'last_name', 'phone', 'postal_code', 'status', 'grand_total'];
    public function order_details()
    {
        return $this->hasMany('order_details') ;
    }
}
