<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;
use App\User;

class AutorizateController extends Controller
{
    public function autorizateShow(){
        return view('autorizate');
        
    }

    public function registerShow(){
        return view('register');
        
    }

    public function autorizate(Request $request){
        $data = $request->validate([ 
        
            "email"=>["required", "email", "string"],
            "password"=>["required"]
        ]);
        if(auth("web")->attempt($data)){
            return redirect(route("aut"));
        }
        
    }
    public function reg(Request $request){
        $data = $request->validate([
            "name"=>["required", "string"],
            "email"=>["required", "email", "string", "unique:users,email"],
            "password"=>["required", "confirmed"]
        ]);
        
        $user = User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        if($user){
            auth("web")->login($user);
        }
        return redirect(route("auto"));
    }

}
