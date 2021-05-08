<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chart;
use App\Models\Children;
use App\Models\Growth;

class ChartController extends Controller
{
    function checkChart($id){
        $dataChild = Children::find($id);

        $charts = Chart::all();

        $age = [];
        $lenght = [];
        $lenght3 = [];
        $lenght_3 = [];
        $weigth = [];
        $weigth3 = [];
        $weigth_3 = [];
        foreach($charts as $chart){
            if($dataChild->gender === "Эрэгтэй"){
                $age[] = $chart->age;
                $lenght[] = $chart->l;
                $lenght3[] = $chart->l3;
                $lenght_3[] = $chart->l_3;
                $weigth[] = $chart->w;
                $weigth3[] = $chart->w3;
                $weigth_3[] = $chart->w_3;
            }
            else{
                $age[] = $chart->age;
                $lenght[] = $chart->lf;
                $lenght3[] = $chart->lf3;
                $lenght_3[] = $chart->lf_3;
                $weigth[] = $chart->wf;
                $weigth3[] = $chart->wf3;
                $weigth_3[] = $chart->wf_3;
            }
            
            
        }
        // dd(json_encode($lenght));
        //graph
        $undurs = [];
        $jins = [];
        $nas = [];
         

        $test = 10;
        
    //    $ii = [];
        $dataGrowth = Growth::all();
    //     foreach($dataGrowth as $mp)
    //     {
    //         if($dataChild->id === $mp->c_id){
    //         $ii[] = "{ x:1, y: 1 }";
    //         }
    //     }
        // $result = str_replace( array("", "'", ";"), '', $ii[0]);
        
        // dd(json_encode($ii));
        foreach($dataGrowth as $mp){
            if($dataChild->id === $mp->c_id){
                $undurs[] = $mp->undur;
                $jins[] = $mp->jin;
                $nas[] =$mp->age;
            }
            
         }
        //  dd(json_encode($undurs));
        return view('chart.index',['child2' => $dataChild,'nas' => $nas,'undurs' => $undurs,'jins' => $jins,'age' => $age,'lenght' => $lenght,'lenght3' => $lenght3,'lenght_3' => $lenght_3,'weigth' => $weigth,'weigth3' => $weigth3,'weigth_3' => $weigth_3,'test' => $test]);
    }


}
