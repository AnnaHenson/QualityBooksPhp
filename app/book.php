<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = ['title', 'description', 'price', 'supplier_id', 'category_id', 'file_name'];

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
