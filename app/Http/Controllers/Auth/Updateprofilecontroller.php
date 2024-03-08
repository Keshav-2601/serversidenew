<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;


class Updateprofilecontroller extends Controller{

    public function update(){
        return view("auth.updateprofilepage");
    }
}