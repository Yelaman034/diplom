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
                'l' => 49.9,
                'l3' => 55.6,
                'l_3' => 44.2,
                'w' => 3.3,
                'w3' => 5,
                'w_3' => 2.1,
                'lf' => 49.1,
                'lf3' => 54.7,
                'lf_3' => 43.6,
                'wf' => 3.2,
                'wf3' => 4.8,
                'wf_3' => 2,

            ],
            [
                'age' => 0.1,
                'l' => 54.7,
                'l3' => 60.6,
                'l_3' => 48.9,
                'w' => 44.5,
                'w3' => 6.6,
                'w_3' => 2.9,
                'lf' => 53.7,
                'lf3' => 59.5,
                'lf_3' => 47.8,
                'wf' => 4.2,
                'wf3' => 6.2,
                'wf_3' => 2.7,

            ],
            [
                'age' => 0.2,
                'l' => 58.4,
                'l3' => 64.6,
                'l_3' =>52.4,
                'w' => 5.6,
                'w3' => 8,
                'w_3' => 3.8,
                'lf' => 57.1,
                'lf3' => 63.2,
                'lf_3' => 51,
                'wf' => 5.1,
                'wf3' => 7.5,
                'wf_3' => 3.4,

            ],
            [
                'age' => 0.3,
                'l' => 61.4,
                'l3' => 67.6,
                'l_3' => 53.5,
                'w' => 6.4,
                'w3' => 9,
                'w_3' => 4.4,
                'lf' => 59.8,
                'lf3' => 66.1,
                'lf_3' => 53.5,
                'wf' => 5.8,
                'wf3' => 8.5,
                'wf_3' => 4,

            ],
            [
                'age' => 0.4,
                'l' => 63.9,
                'l3' => 70.1,
                'l_3' => 57.6,
                'w' => 7,
                'w3' => 9.7,
                'w_3' => 4.9,
                'lf' => 62.1,
                'lf3' => 68.6,
                'lf_3' => 55.6,
                'wf' => 6.4,
                'wf3' => 9.3,
                'wf_3' => 4.4,

            ],
            [
                'age' => 0.5,
                'l' => 65.9,
                'l3' => 72.2,
                'l_3' =>59.6,
                'w' => 7.5,
                'w3' => 10.4,
                'w_3' => 5.3,
                'lf' => 64,
                'lf3' => 70.7,
                'lf_3' => 57.4,
                'wf' => 6.9,
                'wf3' => 10,
                'wf_3' => 4.8,

            ],
            [
                'age' => 0.6,
                'l' => 67.6,
                'l3' => 74,
                'l_3' => 61.2,
                'w' => 10.9,
                'w3' => 5.7,
                'w_3' => 5.9,
                'lf' => 65.7,
                'lf3' => 72.5,
                'lf_3' => 78.9,
                'wf' => 7.3,
                'wf3' => 10.6,
                'wf_3' => 5.1,

            ],
            [
                'age' => 0.7,
                'l' => 69.2,
                'l3' => 75.7,
                'l_3' => 62.7,
                'w' => 8.3,
                'w3' => 11.4,
                'w_3' => 5.9,
                'lf' => 67.3,
                'lf3' => 74.2,
                'lf_3' => 60.3,
                'wf' => 7.6,
                'wf3' => 11,
                'wf_3' => 5.3,

            ],
            [
                'age' => 0.8,
                'l' => 70.6,
                'l3' => 77.2,
                'l_3' => 64,
                'w' => 8.6,
                'w3' => 11.9,
                'w_3' => 6.2,
                'lf' => 68.7,
                'lf3' => 75.8,
                'lf_3' => 61.7,
                'wf' => 7.9,
                'wf3' => 11.6,
                'wf_3' => 5.3,

            ],
            [
                'age' => 0.9,
                'l' => 72,
                'l3' => 78.7,
                'l_3' =>65.2,
                'w' => 8.9,
                'w3' => 12.3,
                'w_3' => 6.4,
                'lf' => 70.1,
                'lf3' => 77.4,
                'lf_3' => 62.9,
                'wf' => 8.2,
                'wf3' => 12,
                'wf_3' => 5.8,

            ],
            [
                'age' => 0.10,
                'l' => 70.3,
                'l3' => 80.1,
                'l_3' => 66.4,
                'w' => 9.2,
                'w3' => 12.7,
                'w_3' => 6.6,
                'lf' => 71.5,
                'lf3' => 78.9,
                'lf_3' => 64.1,
                'wf' => 8.5,
                'wf3' => 14.4,
                'wf_3' => 5.9,

            ],
            [
                'age' => 0.11,
                'l' => 74.5,
                'l3' => 81.5,
                'l_3' => 67.1,
                'w' => 9.4,
                'w3' => 13,
                'w_3' => 6.8,
                'lf' => 72.8,
                'lf3' => 80.3,
                'lf_3' => 65.2,
                'wf' => 8.7,
                'wf3' => 12.8,
                'wf_3' => 6.1,

            ],
            [
                'age' => 1,
                'l' => 75.7,
                'l3' => 82.9,
                'l_3' =>68.6,
                'w' => 9.6,
                'w3' => 13.3,
                'w_3' => 6.9,
                'lf' => 74,
                'lf3' => 81.7,
                'lf_3' => 66.3,
                'wf' => 8.9,
                'wf3' => 13.1,
                'wf_3' => 6.3,

            ],
            [
                'age' => 1.1,
                'l' => 75.9,
                'l3' => 84.2,
                'l_3' => 69.6,
                'w' => 9.9,
                'w3' => 13.7,
                'w_3' => 7.1,
                'lf' => 75.2,
                'lf3' => 83.1,
                'lf_3' => 67.3,
                'wf' => 9.2,
                'wf3' => 13.5,
                'wf_3' => 6.4,

            ],
            [
                'age' => 1.2,
                'l' => 78,
                'l3' => 85.5,
                'l_3' => 70.6,
                'w' => 10.1,
                'w3' => 14,
                'w_3' => 7.2,
                'lf' => 76.4,
                'lf3' => 84.4,
                'lf_3' => 68.3,
                'wf' => 9.4,
                'wf3' => 13.8,
                'wf_3' => 6.6,

            ],
            [
                'age' => 1.3,
                'l' => 79.1,
                'l3' => 86.7,
                'l_3' => 71.6,
                'w' => 10.3,
                'w3' => 14.3,
                'w_3' => 7.4,
                'lf' => 77.5,
                'lf3' => 85.7,
                'lf_3' => 69.3,
                'wf' => 9.6,
                'wf3' => 14.1,
                'wf_3' => 6.7,

            ],
            [
                'age' => 1.4,
                'l' => 80.2,
                'l3' => 88,
                'l_3' => 72.5,
                'w' => 10.5,
                'w3' => 14.6,
                'w_3' => 7.5,
                'lf' => 78.6,
                'lf3' => 87,
                'lf_3' => 70.2,
                'wf' => 9.8,
                'wf3' => 14.5,
                'wf_3' => 6.9,

            ],
            [
                'age' => 1.5,
                'l' => 81.2,
                'l3' => 89.2,
                'l_3' => 73.3,
                'w' => 10.7,
                'w3' => 14.9,
                'w_3' => 7.7,
                'lf' => 79.7,
                'lf3' => 88.2,
                'lf_3' => 71.1,
                'wf' => 10,
                'wf3' => 14.8,
                'wf_3' => 7,

            ],

        ]
    );
    }
}
