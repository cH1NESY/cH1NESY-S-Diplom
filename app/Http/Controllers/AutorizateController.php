<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;
use App\User;
use App\meet_people;
use Illuminate\Support\Facades\Auth;

class AutorizateController extends Controller
{
    public function autorizateShow(){
        return view('autorizate');
        
    }

    public function registerShow(){
        return view('register');
        
    }

    public function autorizate(Request $request){
         $request->validate([ 
        
            "email"=>["required", "email", "string"],
            "password"=>["required"]
        ]);
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect(route("admin.index"));
            
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
     
    public function showPeople($id){
        $meet_peoples = meet_people::all()->where('meet_model_id', '=', $id);
        
        return view('show', ['meet_peoples'=>$meet_peoples]);
    }

    public function logout(){
        Auth::logout();
        return redirect(route('admin.index'));
    }
}
