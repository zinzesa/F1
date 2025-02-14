<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results05Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>501,
            "driver_id"=>11,
            'qualification_id'=>5,
            "q1"=>87.713,
            "q2"=>87.328,
            "q3"=>86.841,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>502,
            "driver_id"=>14,
            'qualification_id'=>5,
            "q1"=>88.179,
            "q2"=>87.097,
            "q3"=>87.202,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>503,
            "driver_id"=>55,
            'qualification_id'=>5,
            "q1"=>87.686,
            "q2"=>87.148,
            "q3"=>87.349,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>504,
            "driver_id"=>20,
            'qualification_id'=>5,
            "q1"=>87.809,
            "q2"=>87.673,
            "q3"=>87.767,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>505,
            "driver_id"=>10,
            'qualification_id'=>5,
            "q1"=>88.061,
            "q2"=>87.612,
            "q3"=>87.786,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>506,
            "driver_id"=>63,
            'qualification_id'=>5,
            "q1"=>88.086,
            "q2"=>87.743,
            "q3"=>87.804,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>507,
            "driver_id"=>16,
            'qualification_id'=>5,
            "q1"=>87.713,
            "q2"=>86.964,
            "q3"=>87.935,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>508,
            "driver_id"=>31,
            'qualification_id'=>5,
            "q1"=>87.872,
            "q2"=>87.444,
            "q3"=>87.935,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>509,
            "driver_id"=>1,
            'qualification_id'=>5,
            "q1"=>87.636,
            "q2"=>86.814,
            "q3"=>null,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>510,
            "driver_id"=>77,
            'qualification_id'=>5,
            "q1"=>87.864,
            "q2"=>87.564,
            "q3"=>null,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>511,
            "driver_id"=>23,
            'qualification_id'=>5,
            "q1"=>88.234,
            "q2"=>87.795,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>512,
            "driver_id"=>27,
            'qualification_id'=>5,
            "q1"=>87.945,
            "q2"=>87.903,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>513,
            "driver_id"=>44,
            'qualification_id'=>5,
            "q1"=>87.846,
            "q2"=>87.975,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>514,
            "driver_id"=>24,
            'qualification_id'=>5,
            "q1"=>88.180,
            "q2"=>88.091,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>515,
            "driver_id"=>21,
            'qualification_id'=>5,
            "q1"=>88.325,
            "q2"=>88.091,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>516,
            "driver_id"=>4,
            'qualification_id'=>5,
            "q1"=>88.394,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>517,
            "driver_id"=>22,
            'qualification_id'=>5,
            "q1"=>88.429,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>518,
            "driver_id"=>18,
            'qualification_id'=>5,
            "q1"=>88.476,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>519,
            "driver_id"=>81,
            'qualification_id'=>5,
            "q1"=>88.484,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>520,
            "driver_id"=>2,
            'qualification_id'=>5,
            "q1"=>88.577,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}
