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
        $data =  DB::table('users')
        ->join('childrens','users.id','=','childrens.p_id')
        ->where('childrens.p_id',$userId)
        ->get();

        return view('children.index',['child' => $data]);
    }
    function create(Request $req){
       
        //оруулсан өгөгдлийн харуулах
        // return $req->all();
        // Children::create($req->all());
       
        if (Auth::check()) {
            // The user is logged in...
            $data = new Children;
            $data->ovog = $req->ovog;
            $data->ner = $req->ner;
            $data->r_number = $req->r_number;
            $data->date_of_birth = $req->date_of_birth;
            $data->hvis = $req->hvis;
            $data->p_id = Auth::id();
            $data->save();
            return redirect('/children');
        }
        
    } 
    function edit($id){
        $dataChild = Children::find($id);
        return view('children.edit',['child' => $dataChild]);
    }

    function update(Request $req, $id){
        $dataChild = Children::find($id);
        $dataChild->update($req->all());
        return redirect('/children');
    }
    function delete($id){
        $dataChild = Children::find($id);
        $dataChild->delete($dataChild);
        return redirect('/children')->with('success','Амжилттай устгагдлаа!!!');
    }
    
}
