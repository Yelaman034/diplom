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

class VaccineController extends Controller
{
    function viewVaccine(Request $req, $id, $ids){
        $data = Vaccine::find($ids);
        $data2 = Children::find($id);
        // $data3 = VaccineRegInfo::all();
        // $data3 = DB::table('childrens')
        // ->join('vaccine_reg_infos','childrens.id', '=', 'vaccine_reg_infos.child_id')
        // ->where('childrens.id',$id)
        // ->get();
        // dd($data3);
        return view('vaccine.index',['vaccine' => $data,'child2' => $data2]);
    }
    function vaccineRegistration(Request $req,$idChild2,$id){

        $child2 = Children::find($idChild2);
        $vaccine = Vaccine::find($id);
        $currentDate = new Carbon();

        // Вакцин хамрагдах огноо
        $birth = $child2->date_of_birth;
        $days = $vaccine->day;

        $birth2 = strtotime($birth);
        $birth2 = strtotime("+$days day", $birth2);
        $result = (date('Y/m/d', $birth2));

        $data2 = new VaccineRegInfo; 
        $data2->vaccine_name = $vaccine->name;
        $data2->weigth = $req->weigth; 
        $data2->height = $req->height; 
        $data2->give_date = $req->give_date;
        $data2->vaccine_id = $vaccine->id;
        $data2->child_id = $child2->id;
        $data2->save();

        return redirect('children/'.$idChild2.'/profile');
    }
    //Vaccine Registration edit
    function editVaccineRegistration($childId,$vaccRegId){
        $childrenFind = Children::find($childId);
        $vaccineRegFind = VaccineRegInfo::find($vaccRegId);
        //
        // $vaccineRegFind = DB::09table('childrens')
        // ->join('vaccine_reg_infos','childrens.id', '=', 'vaccine_reg_infos.child_id')
        // ->where('childrens.id',$childId)
        // ->get();
        // dd($vaccineRegFind);
        return view('vaccine.edit',['child2' => $childrenFind , 'vaccineRegFind' => $vaccineRegFind]);
    }
    function updateVaccineRegistration(Request $req,$childId,$vaccRegId){
        
        $vaccineRegFind = VaccineRegInfo::find($vaccRegId);
        $vaccineRegFind->update($req->all());
        // dd($vaccineRegFind);
        return redirect('children/'.$childId.'/profile');
    }

    //vaccine information
    public function vaccinesList(){
        $vaccines = Vaccine::all();
        // dd($vaccines);

        return view('vaccine.vaccinesList',['vaccines' => $vaccines]);
    }
    function vaccine($id){
        $data = Vaccine::find($id);

        return view('vaccine.vaccineInfo',['vaccine' => $data]);
    }
}
