<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    //
     protected $guarded = [];
     
     public function user(){
         return $this->belongsTo('App\User');
     }
     public function service(){
         return $this->belongsTo('App\service');
     }

}
