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
        return view('children.vaccine',['vaccine' => $data]);
    }
    function addVaccine(Request $req){
        $data = new Vaccine;
        $data->name = $req->name;
        $data->description = $req->description;
        $data->day = $req->day;
        $data->save();
        return redirect('/vaccine');
    }
}
