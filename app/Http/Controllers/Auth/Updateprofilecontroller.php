<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Updateprofilecontroller extends Controller{

   
   public function  update(){
    $User=Auth::user();
    // dd($User);
    $name=$User->name;
    $email=$User->email;
    $password=$User->password;
    return view('auth.updateprofilepage',['name'=>$name,'email'=>$email,'password'=>$password]);

   }

   public function UpdateProfile(  Request $request){
        $User=Auth::user();
        $User->name=$request->input('name');
        $User->email=$request->input('email');
        $User->password=hash::make($request->input('password'));
        $User->save();
        return view('layouts.app')->with('successesfuly updated');
 }
}