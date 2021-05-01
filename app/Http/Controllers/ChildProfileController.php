<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Children;
use App\Models\Growth;
use App\Models\Vaccine;
use App\Models\VaccineRegInfo;
use App\Models\Chart;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Auth;
class ChildProfileController extends Controller
{
    function profile($id){
        $dataChild = Children::find($id);
        $dataVaccine = Vaccine::orderBy('day')->get();

        // //query
        $queryGrowth = DB::table('childrens')
        ->join('growths','childrens.id', '=', 'growths.c_id')
        ->where('childrens.id',$id)
        ->paginate(3);

        

        // $data4 = VaccineRegInfo::all();
        $dataVaccRegInfo = DB::table('childrens')
        ->join('vaccine_reg_infos','childrens.id', '=', 'vaccine_reg_infos.child_id')
        ->where('childrens.id',$id)
        ->get();
        // dd($dataVaccRegInfo);

        




        // //graph
        // $undurs = [];
        // $jins = [];
        // $dataGrowth = Growth::all();
        // foreach($dataGrowth as $mp){
        //     if($dataChild->id === $mp->c_id){
        //         $undurs[] = $mp->undur;
        //         $jins[] = $mp->jin;
        //     }
            
        // }
        // dd(json_encode($jins)); 
        return view('children.profile',['child' => $dataChild,'growth' => $queryGrowth,'vaccines' => $dataVaccine,'dataVaccRegInfo' => $dataVaccRegInfo]);
    }
    
    
    
}
