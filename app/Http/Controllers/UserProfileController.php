<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Auth;

class UserProfileController extends Controller
{
    //
    function userProfile(){
        // $data = User::all();

        $userId = Auth::user()->id;

        $data = User::find($userId);
        // $data =  DB::table('users')
        // ->join('childrens','users.id','=','childrens.user_id')
        // ->where('users.id',$userId)
        // ->get();
        // dd($data);
        return view('user.profile',['data' => $data]);
    }
    function userUpdate(Request $req,$id){
        $req->validate([
            'first_name' => ['required','min:4'],
            'last_name' => ['required','min:4'],
            'phone_number' => ['required','numeric'],
            'email' => ['required','email'],
        ]);
        $user = User::find($id);
        $user->update($req->all());
        return redirect('/profile');
    }

}
