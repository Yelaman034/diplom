<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Auth;
class AuthController extends Controller
{
    function postlogin(Request $req){
    
    if(Auth::attempt($req->only('email','password'))){
        return redirect('/children');
    }
    return redirect('/')->with('aldaa',"Таны имэйл хаяг болон нууц үг буруу байна");   
    

    }
    function register(Request $req){
        //Оруулсан өгөгдлийг авах
        //return $req->input();
        $req->validate([
            'first_name' => ['required','min:4'],
            'last_name' => ['required','min:4'],
            'phone_number' => ['required','numeric'],
            'email' => ['required','email'],
            'password' => ['required','min:8']
        ]);
        $user = new User;
        $user->role = "user";
        $user->first_name = $req->first_name;
        $user->last_name = $req->last_name;
        $user->phone_number = $req->phone_number;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/');
    }
    function logout(){
        Auth::logout();
        return  redirect('/');
    }
}
