<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
   protected $table = 'tbl_users';
   public $timestamps = false;
      protected $fillable = [
       'userId','first_name','last_name','user_email', 'user_password',
    ];
}

    