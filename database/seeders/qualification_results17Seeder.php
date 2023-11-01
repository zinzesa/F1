<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results17Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>1701,
            "driver_id"=>1,
            'qualification_id'=>17,
            "q1"=>89.878,
            "q2"=>89.964,
            "q3"=>88.877,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>1702,
            "driver_id"=>81,
            'qualification_id'=>17,
            "q1"=>90.439,
            "q2"=>90.122,
            "q3"=>89.458,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>1703,
            "driver_id"=>4,
            'qualification_id'=>17,
            "q1"=>90.063,
            "q2"=>90.296,
            "q3"=>89.493,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>1704,
            "driver_id"=>16,
            'qualification_id'=>17,
            "q1"=>90.393,
            "q2"=>89.940,
            "q3"=>89.542,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>1705,
            "driver_id"=>11,
            'qualification_id'=>17,
            "q1"=>90.652,
            "q2"=>89.965,
            "q3"=>89.650,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>1706,
            "driver_id"=>55,
            'qualification_id'=>17,
            "q1"=>90.651,
            "q2"=>90.067,
            "q3"=>89.850,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>1707,
            "driver_id"=>44,
            'qualification_id'=>17,
            "q1"=>90.811,
            "q2"=>90.040,
            "q3"=>89.908,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>1708,
            "driver_id"=>63,
            'qualification_id'=>17,
            "q1"=>90.811,
            "q2"=>90.268,
            "q3"=>90.219,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>1709,
            "driver_id"=>22,
            'qualification_id'=>17,
            "q1"=>90.733,
            "q2"=>90.240,
            "q3"=>90.303,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>1710,
            "driver_id"=>14,
            'qualification_id'=>17,
            "q1"=>90.971,
            "q2"=>90.465,
            "q3"=>90.560,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>1711,
            "driver_id"=>40,
            'qualification_id'=>17,
            "q1"=>90.425,
            "q2"=>90.508,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>1712,
            "driver_id"=>10,
            'qualification_id'=>17,
            "q1"=>90.845,
            "q2"=>90.509,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>1713,
            "driver_id"=>23,
            'qualification_id'=>17,
            "q1"=>90.941,
            "q2"=>90.537,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>1714,
            "driver_id"=>31,
            'qualification_id'=>17,
            "q1"=>90.390,
            "q2"=>90.586,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>1715,
            "driver_id"=>20,
            'qualification_id'=>17,
            "q1"=>90.976,
            "q2"=>90.665,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>1716,
            "driver_id"=>77,
            'qualification_id'=>17,
            "q1"=>91.049,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>1717,
            "driver_id"=>18,
            'qualification_id'=>17,
            "q1"=>91.181,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>1718,
            "driver_id"=>27,
            'qualification_id'=>17,
            "q1"=>91.181,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>1719,
            "driver_id"=>24,
            'qualification_id'=>17,
            "q1"=>91.398,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>1720,
            "driver_id"=>2,
            'qualification_id'=>17,
            "q1"=>null,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}
