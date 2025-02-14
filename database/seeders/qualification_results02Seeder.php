<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results02Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>201,
            "driver_id"=>11,
            'qualification_id'=>2,
            "q1"=>89.244,
            "q2"=>88.635,
            "q3"=>88.265,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>202,
            "driver_id"=>16,
            'qualification_id'=>2,
            "q1"=>89.376,
            "q2"=>88.903,
            "q3"=>88.420,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>203,
            "driver_id"=>14,
            'qualification_id'=>2,
            "q1"=>89.298,
            "q2"=>88.757,
            "q3"=>88.730,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>204,
            "driver_id"=>63,
            'qualification_id'=>2,
            "q1"=>89.292,
            "q2"=>89.132,
            "q3"=>88.857,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>205,
            "driver_id"=>55,
            'qualification_id'=>2,
            "q1"=>89.411,
            "q2"=>88.957,
            "q3"=>88.931,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>206,
            "driver_id"=>18,
            'qualification_id'=>2,
            "q1"=>89.335,
            "q2"=>88.962,
            "q3"=>88.931,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>207,
            "driver_id"=>31,
            'qualification_id'=>2,
            "q1"=>89.707,
            "q2"=>89.255,
            "q3"=>89.078,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>208,
            "driver_id"=>44,
            'qualification_id'=>2,
            "q1"=>89.689,
            "q2"=>89.374,
            "q3"=>89.223,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>209,
            "driver_id"=>81,
            'qualification_id'=>2,
            "q1"=>89.706,
            "q2"=>89.378,
            "q3"=>89.243,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>210,
            "driver_id"=>10,
            'qualification_id'=>2,
            "q1"=>89.890,
            "q2"=>89.411,
            "q3"=>89.357,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>211,
            "driver_id"=>27,
            'qualification_id'=>2,
            "q1"=>89.547,
            "q2"=>89.451,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>212,
            "driver_id"=>24,
            'qualification_id'=>2,
            "q1"=>89.547,
            "q2"=>89.451,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>213,
            "driver_id"=>20,
            'qualification_id'=>2,
            "q1"=>89.744,
            "q2"=>89.634,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>214,
            "driver_id"=>77,
            'qualification_id'=>2,
            "q1"=>89.929,
            "q2"=>89.634,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>215,
            "driver_id"=>1,
            'qualification_id'=>2,
            "q1"=>88.761,
            "q2"=>109.953,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>216,
            "driver_id"=>22,
            'qualification_id'=>2,
            "q1"=>89.239,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>217,
            "driver_id"=>23,
            'qualification_id'=>2,
            "q1"=>89.994,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>218,
            "driver_id"=>21,
            'qualification_id'=>2,
            "q1"=>90.244,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>219,
            "driver_id"=>4,
            'qualification_id'=>2,
            "q1"=>90.447,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>220,
            "driver_id"=>10,
            'qualification_id'=>2,
            "q1"=>128.510,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];

        
        Db::table('qualification_results')->insert($qualificationResults);
    }
}
