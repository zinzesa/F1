<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results08Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>801,
            "driver_id"=>1,
            'qualification_id'=>8,
            "q1"=>73.615,
            "q2"=>72.760,
            "q3"=>72.272,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>802,
            "driver_id"=>55,
            'qualification_id'=>8,
            "q1"=>73.411,
            "q2"=>72.790,
            "q3"=>72.734,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>803,
            "driver_id"=>4,
            'qualification_id'=>8,
            "q1"=>73.295,
            "q2"=>72.776,
            "q3"=>72.792,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>804,
            "driver_id"=>10,
            'qualification_id'=>8,
            "q1"=>73.471,
            "q2"=>73.186,
            "q3"=>72.816,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>805,
            "driver_id"=>44,
            'qualification_id'=>8,
            "q1"=>72.937,
            "q2"=>72.999,
            "q3"=>72.818,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>806,
            "driver_id"=>18,
            'qualification_id'=>8,
            "q1"=>73.766,
            "q2"=>73.082,
            "q3"=>72.994,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>807,
            "driver_id"=>31,
            'qualification_id'=>8,
            "q1"=>73.433,
            "q2"=>73.001,
            "q3"=>73.083,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>808,
            "driver_id"=>27,
            'qualification_id'=>8,
            "q1"=>73.420,
            "q2"=>73.283,
            "q3"=>73.229,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>809,
            "driver_id"=>14,
            'qualification_id'=>8,
            "q1"=>73.747,
            "q2"=>73.098,
            "q3"=>73.507,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>810,
            "driver_id"=>81,
            'qualification_id'=>8,
            "q1"=>73.691,
            "q2"=>73.059,
            "q3"=>73.682,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>811,
            "driver_id"=>11,
            'qualification_id'=>8,
            "q1"=>73.874,
            "q2"=>73.334,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>812,
            "driver_id"=>63,
            'qualification_id'=>8,
            "q1"=>73.326,
            "q2"=>73.447,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>813,
            "driver_id"=>24,
            'qualification_id'=>8,
            "q1"=>73.667,
            "q2"=>73.521,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>814,
            "driver_id"=>21,
            'qualification_id'=>8,
            "q1"=>73.581,
            "q2"=>74.083,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>815,
            "driver_id"=>22,
            'qualification_id'=>8,
            "q1"=>73.862,
            "q2"=>74.447,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>816,
            "driver_id"=>77,
            'qualification_id'=>8,
            "q1"=>73.977,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>817,
            "driver_id"=>20,
            'qualification_id'=>8,
            "q1"=>74.042,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>818,
            "driver_id"=>23,
            'qualification_id'=>8,
            "q1"=>74.063,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>819,
            "driver_id"=>16,
            'qualification_id'=>8,
            "q1"=>74.079,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>820,
            "driver_id"=>2,
            'qualification_id'=>8,
            "q1"=>74.699,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}
