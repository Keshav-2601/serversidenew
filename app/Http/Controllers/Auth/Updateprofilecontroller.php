<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class Updateprofilecontroller extends Controller{

   
   public function  update(){
    $User=Auth::user();
    // dd($User);
    $name=$User->name;
    $email=$User->email;
    $password=$User->password;
    return view('auth.updateprofilepage',['name'=>$name,'email'=>$email,'password'=>$password]);
   }
    
}