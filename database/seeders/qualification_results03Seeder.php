<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results03Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>301,
            "driver_id"=>1,
            'qualification_id'=>3,
            "q1"=>77.384,
            "q2"=>77.265,
            "q3"=>76.732,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>302,
            "driver_id"=>63,
            'qualification_id'=>3,
            "q1"=>77.654,
            "q2"=>77.513,
            "q3"=>76.968,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>303,
            "driver_id"=>44,
            'qualification_id'=>3,
            "q1"=>77.689,
            "q2"=>77.551,
            "q3"=>77.104,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>304,
            "driver_id"=>14,
            'qualification_id'=>3,
            "q1"=>77.832,
            "q2"=>77.283,
            "q3"=>77.139,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>305,
            "driver_id"=>55,
            'qualification_id'=>3,
            "q1"=>77.928,
            "q2"=>77.349,
            "q3"=>77.270,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>306,
            "driver_id"=>18,
            'qualification_id'=>3,
            "q1"=>77.873,
            "q2"=>77.616,
            "q3"=>77.308,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>307,
            "driver_id"=>16,
            'qualification_id'=>3,
            "q1"=>78.218,
            "q2"=>77.390,
            "q3"=>77.369,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>308,
            "driver_id"=>23,
            'qualification_id'=>3,
            "q1"=>77.962,
            "q2"=>77.761,
            "q3"=>77.609,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>309,
            "driver_id"=>10,
            'qualification_id'=>3,
            "q1"=>78.312,
            "q2"=>77.574,
            "q3"=>77.675,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>310,
            "driver_id"=>27,
            'qualification_id'=>3,
            "q1"=>78.029,
            "q2"=>77.412,
            "q3"=>77.735,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>311,
            "driver_id"=>31,
            'qualification_id'=>3,
            "q1"=>77.770,
            "q2"=>77.768,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>312,
            "driver_id"=>22,
            'qualification_id'=>3,
            "q1"=>78.471,
            "q2"=>78.099,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>313,
            "driver_id"=>4,
            'qualification_id'=>3,
            "q1"=>78.243,
            "q2"=>78.119,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>314,
            "driver_id"=>20,
            'qualification_id'=>3,
            "q1"=>78.159,
            "q2"=>78.129,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>315,
            "driver_id"=>21,
            'qualification_id'=>3,
            "q1"=>78.450,
            "q2"=>78.335,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>316,
            "driver_id"=>81,
            'qualification_id'=>3,
            "q1"=>78.517,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>317,
            "driver_id"=>24,
            'qualification_id'=>3,
            "q1"=>78.540,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>318,
            "driver_id"=>2,
            'qualification_id'=>3,
            "q1"=>78.557,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>319,
            "driver_id"=>77,
            'qualification_id'=>3,
            "q1"=>78.714,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>320,
            "driver_id"=>11,
            'qualification_id'=>3,
            "q1"=>null,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}
