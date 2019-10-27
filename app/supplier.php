<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $fillable = ['email','home_number','supplier_name','work_number','mobile_number'];
    public function books()
    {
        return $this->hasMany('book');
    }
}
