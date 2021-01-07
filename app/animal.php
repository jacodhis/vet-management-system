<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class animal extends Model
{
    //
       protected $guarded = [];
     
     public function category(){
         return $this->belongsTo('App\category');
     }

      public function services(){
         return $this->hasMany('App\service');
     }
}
