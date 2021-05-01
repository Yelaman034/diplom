<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vaccine;
use App\Models\User;
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
        $req->validate([
            'name' => ['required'],
            'about' => ['required','max:225'],
            'dose' => ['required','max:255' ],
            'side_effects' => ['required','max:255'],
            'day' => ['required','numeric'],
        ]);
        $data = new Vaccine;
        $data->name = $req->name;
        $data->about = $req->about;
        $data->dose = $req->dose;
        $data->side_effects = $req->side_effects;
        $data->day = $req->day;
        $data->save();
        return redirect('/vaccine');
    }

    function consumer(){
        $consumers = User::all();

        // dd($consumers);

        return view('admin.consumer',['consumer' => $consumers]);
    }
}
