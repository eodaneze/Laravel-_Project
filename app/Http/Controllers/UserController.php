<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        return "Hello from our controller";
    }
}
