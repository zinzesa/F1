<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results15Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>1501,
            "driver_id"=>1,
            'qualification_id'=>15,
            "q1"=>80.965,
            "q2"=>78.856,
            "q3"=>70.567,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>1502,
            "driver_id"=>4,
            'qualification_id'=>15,
            "q1"=>81.276,
            "q2"=>79.769,
            "q3"=>71.104,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>1503,
            "driver_id"=>63,
            'qualification_id'=>15,
            "q1"=>81.346,
            "q2"=>79.620,
            "q3"=>71.294,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>1504,
            "driver_id"=>23,
            'qualification_id'=>15,
            "q1"=>80.939,
            "q2"=>79.399,
            "q3"=>71.419,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>1505,
            "driver_id"=>14,
            'qualification_id'=>15,
            "q1"=>81.840,
            "q2"=>79.429,
            "q3"=>71.506,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>1506,
            "driver_id"=>55,
            'qualification_id'=>15,
            "q1"=>81.321,
            "q2"=>79.929,
            "q3"=>71.754,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>1507,
            "driver_id"=>11,
            'qualification_id'=>15,
            "q1"=>81.972,
            "q2"=>79.856,
            "q3"=>71.880,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>1508,
            "driver_id"=>81,
            'qualification_id'=>15,
            "q1"=>81.231,
            "q2"=>79.769,
            "q3"=>71.938,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>1509,
            "driver_id"=>16,
            'qualification_id'=>15,
            "q1"=>82.019,
            "q2"=>79.600,
            "q3"=>72.665,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>1510,
            "driver_id"=>2,
            'qualification_id'=>15,
            "q1"=>82.036,
            "q2"=>80.067,
            "q3"=>76.748,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>1511,
            "driver_id"=>22,
            'qualification_id'=>15,
            "q1"=>81.570,
            "q2"=>81.594,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>1512,
            "driver_id"=>40,
            'qualification_id'=>15,
            "q1"=>81.735,
            "q2"=>81.758,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>1513,
            "driver_id"=>27,
            'qualification_id'=>15,
            "q1"=>81.919,
            "q2"=>81.776,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>1514,
            "driver_id"=>77,
            'qualification_id'=>15,
            "q1"=>81.781,
            "q2"=>81.940,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>1515,
            "driver_id"=>2,
            'qualification_id'=>15,
            "q1"=>81.891,
            "q2"=>81.944,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>1516,
            "driver_id"=>24,
            'qualification_id'=>24,
            "q1"=>82.390,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>1517,
            "driver_id"=>10,
            'qualification_id'=>15,
            "q1"=>82.545,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>1518,
            "driver_id"=>31,
            'qualification_id'=>15,
            "q1"=>82.548,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>1519,
            "driver_id"=>20,
            'qualification_id'=>15,
            "q1"=>82.592,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>1520,
            "driver_id"=>18,
            'qualification_id'=>15,
            "q1"=>82.860,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}
