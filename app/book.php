<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    function supplier()
    {
        $this->belongsTo('supplier');
    }

    function category()
    {
        $this->belongsTo('category');
    }
}
