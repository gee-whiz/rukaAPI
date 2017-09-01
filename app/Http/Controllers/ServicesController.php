<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Services;
use Request;
use Auth;
use Input;


class ServicesController extends Controller
{
    
     //create a service
   public function create(Request $request)
   {
	    $services=$request::all();
	    services::create($services);
	    return $services;
    }


    //get All services
   public function index()
   {
        $services=Services::all();
        return $services;
   }
    //return DB::select('call sp_clientupdate("108", "Sandeep","0999999999","","","sandeep@gmail.com","","","","","","",)');
}
