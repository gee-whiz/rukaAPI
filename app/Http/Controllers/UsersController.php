<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Users;
use Request;
use Auth;
use Input;

class UsersController extends Controller
{/**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
        $users=Users::all();
        return $users;
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create(Request $request)
   {
	    $user=$request::all();
	    Users::create($user);
	    return $user;
  }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store()
   {
      //
   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {

      $id = intval($id);
      $user=Users::find($id);  
	  return $user;
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
      //
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id)
   {
      //
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
      //
   }

}
