<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Systemuser extends Model
{
   protected $table = 'systemusers';

    public function articles()
    {
        return $this->hasMany('App\Article');
    } 
}
