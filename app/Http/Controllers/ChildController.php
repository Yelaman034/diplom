<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Children;
class ChildController extends Controller
{
    //
    function children(Request $req){
        
        // $data = Child::all();
        // return view('children.index',['child' => $data]);

        $userId = Auth::user()->id;
        $childrens =  DB::table('users')
        ->join('childrens','users.id','=','childrens.user_id')
        ->where('childrens.user_id',$userId)
        ->get();

        return view('children.index',['child' => $childrens]);
    }
    function addChild(Request $req){
       
        //оруулсан өгөгдлийн харуулах
        // return $req->all();
        // Children::create($req->all());
        $req->validate([
            'fname' => ['required','min:4'],
            'lname' => ['required','min:4'],
            'register_number' => ['required','size:8','regex:/[0-9]/',],
            'date_of_birth' => ['required'],
            'gender' => ['required'],
        ]);

        $register_number = $req->r1 . $req->r2 . $req->register_number;
        if (Auth::check()) {
            // The user is logged in...
            $data = new Children;
            $data->fname = $req->fname;
            $data->lname = $req->lname;
            $data->register_number = $register_number;
            $data->date_of_birth = $req->date_of_birth;
            $data->gender = $req->gender;
            $data->user_id = Auth::id();
            $data->save();
            return redirect('/children');
        }
        
    } 
    function editChild($id){
        $childrenFind = Children::find($id);
        return view('children.edit',['child' => $childrenFind]);
    }

    function updateChild(Request $req, $id){
        $childrenFind = Children::find($id);
        $childrenFind->update($req->all());
        return redirect('/children');
    }
    function deleteChild($id){
        $childrenFind = Children::find($id);
        $childrenFind->delete($childrenFind);
        return redirect('/children')->with('success','Амжилттай устгагдлаа!!!');
    }
    
}
