<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

   public $timestamps = false;
      protected $fillable = [
       'userId','first_name','last_name','email', 'password',
    ];

}
