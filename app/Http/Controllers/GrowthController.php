<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Growth;
use Carbon\Carbon;

class GrowthController extends Controller
{
    function addGrowth(Request $req,$idChild){
        // dd($req->all());
        $req->validate([
            'jin' => ['required','numeric'],
            'undur' => ['required','numeric'],
        ]);

         
        $currentDate = new Carbon();
        $bmi =  (double) floor(($req->jin/($req->undur * $req->undur))*10000);

        // $age = $req->year + $req->month;
        $data = new Growth;
        $data->age = $req->month;
        $data->date_of_visit = $currentDate;
        $data->jin = $req->jin; 
        $data->undur = $req->undur; 
        $data->bmi = $bmi;
        $data->c_id = $idChild;
        $data->save(); 

        return redirect('children/'.$idChild.'/profile');
    }
    function editGrowth(Request $req, $idChild){

        $req->validate([
            'age' => ['required','numeric'],
            'jin' => ['required','numeric'],
            'undur' => ['required','numeric'],
        ]);
        // dd($req->all());
        $bmi =  (double) floor(($req->jin/($req->undur * $req->undur))*10000);

        $growth = Growth::findOrFail($req->id); 
        $growth->age = $req->age;
        $growth->jin = $req->jin; 
        $growth->undur = $req->undur; 
        $growth->bmi = $bmi;
        $growth->c_id = $idChild;
        $growth->save(); 

        // $growth->update($req->all());

        return back();
    }
    function destroy(Request $req){
        $growth = Growth::findOrFail($req->id);
        $growth->delete($growth);

        return back();
    }

}
