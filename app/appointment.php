<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    //
     protected $guarded = [];

     public function service(){
         return $this->belongsTo('App\service');
     }
      public function User(){
         return $this->belongsTo('App\User');
     }
}
