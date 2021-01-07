<?php
namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $hidden = ['password', 'remember_token'];

    public function isAdmin() {
       return $this->role === 'admin';
    }

    public function isUser() {
       return $this->role === 'user';
    }
     public function appointments(){
         return $this->hasMany('App\appointment');
     }
      public function ratings(){
         return $this->hasMany('App\rate');
     }
     public function account(){
         return $this->hasOne('App\account');
     }
}
   
