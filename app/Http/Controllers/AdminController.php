<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vaccine;
class AdminController extends Controller
{
    function admin(){
        return view('admin.index');
    }
    function vaccine(){
        $data = Vaccine::all();
        return view('admin.addVaccine',['vaccine' => $data]);
    }
    function addVaccine(Request $req){
        $data = new Vaccine;
        $data->name = $req->name;
        $data->about = $req->about;
        $data->dose = $req->dose;
        $data->side_effects = $req->side_effects;
        $data->day = $req->day;
        $data->save();
        return redirect('/vaccine');
    }
}
