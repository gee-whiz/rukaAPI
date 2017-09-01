<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Users;
use Auth;
use Input;




class LoginController extends Controller
{
    //ligin user
   public function login(Request $request)
   {
   	   $email=$request->input('email');
   	   $password=$request->input('password');
        $user = Users::where('email',$email)->where('password',$password)-> first();
		if($user) {
		   return  $user;
		} else {
		    return '01';
		}
	}
}
