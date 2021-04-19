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
    return redirect('/');
    

    }
    function register(Request $req){
        //Оруулсан өгөгдлийг авах
        //return $req->input();
        $req->validate([
            'surname' => ['required','min:4'],
            'fullname' => ['required','min:4'],
            'email' => ['required','email'],
            'password' => ['required','min:8']
        ]);
        $user = new User;
        $user->role = "user";
        $user->surname = $req->surname;
        $user->fullname = $req->fullname;
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
