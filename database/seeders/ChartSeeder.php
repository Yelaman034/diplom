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
                'age' => 0,
                'lenght' => 49.9,
                'lenght2' => 53.7,
                'lenght3' => 55.6,
                'lenght_2' => 46.1,
                'lenght_3' => 44.2,
                'weigth' => 3.3,
                'weigth2' => 4.4,
                'weigth3' => 5,
                'weigth_2' => 2.5,
                'weigth_3' => 2.1,
            ],
            [
                'age' => 0.1,
                'lenght' => 54.7,
                'lenght2' => 58.6,
                'lenght3' => 60.6,
                'lenght_2' => 50.8,
                'lenght_3' => 48.9,
                'weigth' => 4.5,
                'weigth2' => 5.8,
                'weigth3' => 6.6,
                'weigth_2' => 3.4,
                'weigth_3' => 2.9,
            ],
            [
                'age' => 0.2,
                'lenght' => 58.4,
                'lenght2' => 62.4,
                'lenght3' => 64.4,
                'lenght_2' => 54.4,
                'lenght_3' => 52.4,
                'weigth' => 5.6,
                'weigth2' => 7.1,
                'weigth3' => 8,
                'weigth_2' => 4.3,
                'weigth_3' => 3.8,
            ],
            [
                'age' => 0.3,
                'lenght' => 61.4,
                'lenght2' => 65.6,
                'lenght3' => 67.6,
                'lenght_2' => 57.3,
                'lenght_3' => 55.3,
                'weigth' => 6.4,
                'weigth2' => 8,
                'weigth3' => 9,
                'weigth_2' => 5,
                'weigth_3' => 4.4,
            ],
            [
                'age' => 0.4,
                'lenght' => 63.9,
                'lenght2' => 68,
                'lenght3' => 70.1,
                'lenght_2' => 59.7,
                'lenght_3' => 57.6,
                'weigth' => 7,
                'weigth2' => 8.7,
                'weigth3' => 9.7,
                'weigth_2' => 5.6,
                'weigth_3' => 4.9,
            ],
            [
                'age' => 0.5,
                'lenght' => 65.9,
                'lenght2' => 70.1,
                'lenght3' => 72.2,
                'lenght_2' => 61.7,
                'lenght_3' => 59.6,
                'weigth' => 7.5,
                'weigth2' => 9.3,
                'weigth3' => 10.4,
                'weigth_2' => 6,
                'weigth_3' => 5.3,
            ],
        ]
    );
    }
}
