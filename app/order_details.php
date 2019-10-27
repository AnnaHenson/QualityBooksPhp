<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    protected $fillable= ['order_id', 'book_id', 'quantity', 'unit_price'];
}
