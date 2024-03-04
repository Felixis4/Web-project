<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    function login(){
        if(Auth::check()){
            return redirect(route("home"));
        }
        return view("login");
    }
    function registration(Request $request){
        if(Auth::check()){
            return redirect(route("home"));
        }
        return view("registration");
    }
    function loginPost(Request $request){
        $request->validate([
            'email'=> "required",
            'password'=> "required",
            ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route(name:'home'))->with('success','Hi {{auth()->user()->name }} success');
        }
        return redirect(route(name:'login'))->with("error","Email or Password are incorrect");
    }
    function registrationPost(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=> "required|email|unique:users",
            "password"=> "required",
            ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(! $user){
            return redirect(route(name:'registration'))->with("error","The Registration falied, try again");
        }
        else{
            return redirect(route(name:'login'))->with("success","Registration success!");
        }
    }
    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route(name:'login'));
    }
}