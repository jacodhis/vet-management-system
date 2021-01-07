<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
       protected $guarded = [];
     
     public function animal(){
         return $this->hasMany('App\animal');
     }

     public function services(){
         return $this->hasMany('App\service');
     }
     
}
