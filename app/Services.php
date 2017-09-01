<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    

   protected $table = 'tbl_services';
   public $timestamps = false;
      protected $fillable = [
       'name','address','latitude','longitude', 'email_address', 'phone', 'description', 'professional_id','price','image_uri', 'available_time',
    ];
}
