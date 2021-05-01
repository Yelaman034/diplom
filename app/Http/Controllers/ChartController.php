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
        $lenght2 = [];
        $lenght3 = [];
        $lenght_2 = [];
        $lenght_3 = [];
        $weigth = [];
        $weigth2 = [];
        $weigth3 = [];
        $weigth_2 = [];
        $weigth_3 = [];
        foreach($charts as $chart){
            $age[] = $chart->age;
            $lenght[] = $chart->lenght;
            $lenght2[] = $chart->lenght2;
            $lenght3[] = $chart->lenght3;
            $lenght_2[] = $chart->lenght_2;
            $lenght_3[] = $chart->lenght_3;
            $weigth[] = $chart->weigth;
            $weigth2[] = $chart->weigth2;
            $weigth3[] = $chart->weigth3;
            $weigth_2[] = $chart->weigth_2;
            $weigth_3[] = $chart->weigth_3;
            
        }
        // dd(json_encode($lenght));
        //graph
        $undurs = [];
        $jins = [];
        $nas = [];
        
       
        $dataGrowth = Growth::all();
        foreach($dataGrowth as $mp){
            if($dataChild->id === $mp->c_id){
                $undurs[] = $mp->undur;
                $jins[] = $mp->jin;
                $nas[] =$mp->age;
            }
            
        }
        //  dd(json_encode($undurs));
        return view('chart.index',['child2' => $dataChild,'nas' => $nas,'undurs' => $undurs,'jins' => $jins,'age' => $age,'lenght' => $lenght,'lenght2' => $lenght2,'lenght3' => $lenght3,'lenght_2' => $lenght_2,'lenght_3' => $lenght_3]);
    }


}
