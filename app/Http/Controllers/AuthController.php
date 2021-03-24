<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Auth;
class AuthController extends Controller
{
    //
    function postlogin(Request $req){
        //return $req->input();

        //return User::where(['email'=>$req->email])->first();
    //    $user =  User::where(['email'=>$req->email])->first();
    //     if(!$user || !Hash::check($req->password,$user->password))
    //     {
    //         return redirect('/log');
    //     }else{
    //         $req->session()->put('user',$user);
    //         return redirect('/children');
    //     }
    if(Auth::attempt($req->only('email','password'))){
        return redirect('/children');
    }
    return redirect('/');
    

    }
    function register(Request $req){
        //Оруулсан өгөгдлийг авах
        //return $req->input();
        $user = new User;
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
