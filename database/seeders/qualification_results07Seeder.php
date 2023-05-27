<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results07Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>701,
            "driver_id"=>1,
            'qualification_id'=>7,
            "q1"=>72.386,
            "q2"=>71.908,
            "q3"=>71.365,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>702,
            "driver_id"=>14,
            'qualification_id'=>7,
            "q1"=>72.886,
            "q2"=>72.107,
            "q3"=>71.449,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>703,
            "driver_id"=>16,
            'qualification_id'=>7,
            "q1"=>72.912,
            "q2"=>72.103,
            "q3"=>71.471,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>704,
            "driver_id"=>31,
            'qualification_id'=>7,
            "q1"=>72.967,
            "q2"=>72.248,
            "q3"=>71.553,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>705,
            "driver_id"=>55,
            'qualification_id'=>7,
            "q1"=>72.717,
            "q2"=>72.248,
            "q3"=>71.553,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>706,
            "driver_id"=>44,
            'qualification_id'=>7,
            "q1"=>72.872,
            "q2"=>72.156,
            "q3"=>71.725,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>707,
            "driver_id"=>10,
            'qualification_id'=>7,
            "q1"=>73.033,
            "q2"=>72.156,
            "q3"=>71.725,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>708,
            "driver_id"=>63,
            'qualification_id'=>7,
            "q1"=>72.769,
            "q2"=>72.151,
            "q3"=>71.964,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>709,
            "driver_id"=>22,
            'qualification_id'=>7,
            "q1"=>72.642,
            "q2"=>72.249,
            "q3"=>72.082,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>710,
            "driver_id"=>4,
            'qualification_id'=>7,
            "q1"=>72.877,
            "q2"=>72.377,
            "q3"=>72.254,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>711,
            "driver_id"=>81,
            'qualification_id'=>7,
            "q1"=>73.054,
            "q2"=>72.395,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>712,
            "driver_id"=>21,
            'qualification_id'=>7,
            "q1"=>73.054,
            "q2"=>72.428,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>713,
            "driver_id"=>23,
            'qualification_id'=>7,
            "q1"=>72.706,
            "q2"=>72.527,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>714,
            "driver_id"=>18,
            'qualification_id'=>7,
            "q1"=>72.722,
            "q2"=>72.623,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>715,
            "driver_id"=>77,
            'qualification_id'=>7,
            "q1"=>73.038,
            "q2"=>72.625,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>716,
            "driver_id"=>2,
            'qualification_id'=>7,
            "q1"=>73.113,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>717,
            "driver_id"=>20,
            'qualification_id'=>7,
            "q1"=>73.270,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>718,
            "driver_id"=>27,
            'qualification_id'=>7,
            "q1"=>73.279,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>719,
            "driver_id"=>24,
            'qualification_id'=>7,
            "q1"=>73.523,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>720,
            "driver_id"=>11,
            'qualification_id'=>7,
            "q1"=>73.850,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}
