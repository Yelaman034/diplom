<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('charts')->insert(
        [
            
            [
                'age' => 0.6,
                'lenght' => 67.6,
                'lenght2' => 71.9,
                'lenght3' => 74,
                'lenght_2' => 63.4,
                'lenght_3' => 61.2,
                'weigth' => 7.9,
                'weigth2' => 9.8,
                'weigth3' => 10.9,
                'weigth_2' => 6.4,
                'weigth_3' => 5.7,
            ],
        ]
    );
    }
}
