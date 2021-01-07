<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    //
     protected $guarded = [];
     
     public function category(){
         return $this->belongsTo('App\category');
     }

      public function animal(){
         return $this->belongsTo('App\animal');
     }
      public function appointments(){
         return $this->hasMany('App\appointment');
     }
      public function comments(){
         return $this->morphMany(comment::class,'commentable');
     } 
     public function ratings(){
         return $this->hasMany('App\rate');
     }
}
