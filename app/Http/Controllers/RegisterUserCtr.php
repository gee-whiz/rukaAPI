<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
Use App\Users;

class RegisterUserCtr extends Controller
{
	public function register(Request $request)
    {
        $user=$request::all();
        Users::create($user);
        return $user;
     }
   


}
