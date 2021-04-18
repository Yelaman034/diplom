<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Children;
use App\Models\Growth;
use App\Models\Vaccine;
use App\Models\ChildVaccineInfo;
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

        $data3 = Vaccine::all();

        // $data4 = ChildVaccineInfo::all();
        $data4 = DB::table('childrens')
        ->join('child_vaccine_infos','childrens.id', '=', 'child_vaccine_infos.c_id')
        ->where('childrens.id',$id)
        ->get();

        //graph
        $categories = [];
        $jins = [];

        foreach($data2 as $mp){
            if($data->id === $mp->c_id){
                $categories[] = $mp->undur;
                $jins[] = $mp->jin;
            }
            
        }
        // dd(json_encode($jins));    
        return view('children.profile',['child' => $data,'growth' => $query,'vaccines' => $data3,'childData' => $data4,'categories' => $categories,'jins' => $jins]);
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

    function viewVaccine(Request $req, $id, $ids){
        $data = Vaccine::find($ids);
        $data2 = Children::find($id);
        // $data3 = ChildVaccineInfo::all();
        $data3 = DB::table('childrens')
        ->join('child_vaccine_infos','childrens.id', '=', 'child_vaccine_infos.c_id')
        ->where('childrens.id',$id)
        ->get();
        return view('children.vaccine',['vaccine' => $data,'child2' => $data2,'vacc' => $data3]);
    }
    function record(Request $req,$idChild2,$id){
        $child2 = Children::find($idChild2);
        $vacc = Vaccine::find($id);

        $data2 = new ChildVaccineInfo; 
        $data2->v_ner = $vacc->name;
        $data2->undur = $req->undur; 
        $data2->jin = $req->jin; 
        $data2->shaltgan = $req->shaltgan;
        $data2->hiisen_ognoo = $req->hiisen_ognoo;
        $data2->burtgesen_ognoo = $req->burtgesen_ognoo;
        $data2->v_id = $vacc->id;
        $data2->c_id = $child2->id;
        $data2->save();

        return redirect('children/'.$idChild2.'/profile');
    }
    
}
