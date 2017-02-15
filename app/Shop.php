<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Shop extends Model
{
     public function products()
    {
        return $this->belongsToMany('App\Products','products_shops','shops_id', 'products_id');
    }
}
