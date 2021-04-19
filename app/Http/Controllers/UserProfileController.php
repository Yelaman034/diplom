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
        $data =  DB::table('users')
        ->join('childrens','users.id','=','childrens.p_id')
        ->where('users.id',$userId)
        ->get();
        // dd($data[0]->fullname);
        return view('user.profile',['data' => $data]);
    }
    function userUpdate(Request $req,$id){
        $req->validate([
            'surname' => ['required','min:4'],
            'fullname' => ['required','min:4'],
            'email' => ['required','email'],
        ]);
        $user = User::find($id);
        $user->update($req->all());
        return redirect('/profile');
    }

}
