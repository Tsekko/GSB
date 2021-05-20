<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{

    public function getProfile(){
        return view("profile")->with(compact('ConnectedUsers', $ConnectedUsers = User::where('id', Auth::user()->id)->get()));
    }


}