<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Children;
use App\Models\Growth;
use Illuminate\Support\Facades\DB;
class ChildProfileController extends Controller
{
    function profile($id){
        $data = Children::find($id);
        $data2 = Growth::all();

        // //query
        $query = DB::table('childrens')
        ->join('growths','childrens.id', '=', 'growths.c_id')
        ->where('childrens.id',$id)
        ->get();

        
        return view('children.profile',['child' => $data,'growth' => $query]);
    }
    function add(Request $req,$idChild){
        // dd($req->all());
        $child = Children::find($idChild);
       
        $bmi =  (double) floor(($req->jin/($req->undur * $req->undur))*10000);

        $data = new Growth; 
        $data->date_of_visit = $req->date_of_visit; 
        $data->jin = $req->jin; 
        $data->undur = $req->undur; 
        $data->bmi = $bmi;
        $data->c_id = $idChild;
        $data->save(); 

        return redirect('children/'.$idChild.'/profile');
    }
}
