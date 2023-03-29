<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class qualifications_results01Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationsResults=[];
        $qualificationsResults[]=[
            "id"=>101,
            "drivers_id"=>1,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.295",
            "q2"=>"00:01:30.503",
            "q3"=>"00:01:29.708",
            "position"=>1
        ];
        $qualificationsResults[]=[
            "id"=>102,
            "drivers_id"=>11,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.479",
            "q2"=>"00:01:30.746",
            "q3"=>"00:01:29.846",
            "position"=>2
        ];
        $qualificationsResults[]=[
            "id"=>103,
            "drivers_id"=>16,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.094",
            "q2"=>"00:01:30.282",
            "q3"=>"00:01:30.000",
            "position"=>3
        ];
        $qualificationsResults[]=[
            "id"=>104,
            "drivers_id"=>55,
            'qualifications_id'=>1,
            "q1"=>"00:01:30.993",
            "q2"=>"00:01:30.515",
            "q3"=>"00:01:30.154",
            "position"=>4
        ];
        $qualificationsResults[]=[
            "id"=>105,
            "drivers_id"=>14,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.158",
            "q2"=>"00:01:30.645",
            "q3"=>"00:01:30.336",
            "position"=>5
        ];
        $qualificationsResults[]=[
            "id"=>106,
            "drivers_id"=>63,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.057",
            "q2"=>"00:01:30.645",
            "q3"=>"00:01:29.336",
            "position"=>6
        ];
        $qualificationsResults[]=[
            "id"=>107,
            "drivers_id"=>44,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.543",
            "q2"=>"00:01:30.513",
            "q3"=>"00:01:30.384",
            "position"=>7
        ];
        $qualificationsResults[]=[
            "id"=>108,
            "drivers_id"=>18,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.184",
            "q2"=>"00:01:31.127",
            "q3"=>"00:01:30.836",
            "position"=>8
        ];
        $qualificationsResults[]=[
            "id"=>109,
            "drivers_id"=>31,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.508",
            "q2"=>"00:01:30.914",
            "q3"=>"00:01:30.984",
            "position"=>9
        ];
        $qualificationsResults[]=[
            "id"=>110,
            "drivers_id"=>27,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.204",
            "q2"=>"00:01:30.91",
            "q3"=>null,
            "position"=>10
        ];
        $qualificationsResults[]=[
            "id"=>111,
            "drivers_id"=>4,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.652",
            "q2"=>"00:01:31.381",
            "q3"=>null,
            "position"=>11
        ];
        $qualificationsResults[]=[
            "id"=>112,
            "drivers_id"=>77,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.504",
            "q2"=>"00:01:31.443",
            "q3"=>null,
            "position"=>12
        ];
        $qualificationsResults[]=[
            "id"=>113,
            "drivers_id"=>24,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.615",
            "q2"=>"00:01:31.473",
            "q3"=>null,
            "position"=>13
        ];
        $qualificationsResults[]=[
            "id"=>114,
            "drivers_id"=>22,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.400",
            "q2"=>"00:01:32.510",
            "q3"=>null,
            "position"=>14
        ];
        $qualificationsResults[]=[
            "id"=>115,
            "drivers_id"=>23,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.461",
            "q2"=>null,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationsResults[]=[
            "id"=>116,
            "drivers_id"=>2,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.652",
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationsResults[]=[
            "id"=>117,
            "drivers_id"=>20,
            'qualifications_id'=>1,
            "q1"=>"00:01:31.892",
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationsResults[]=[
            "id"=>118,
            "drivers_id"=>81,
            'qualifications_id'=>1,
            "q1"=>"00:01:32.101",
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationsResults[]=[
            "id"=>119,
            "drivers_id"=>21,
            'qualifications_id'=>1,
            "q1"=>"00:01:32.121",
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationsResults[]=[
            "id"=>120,
            "drivers_id"=>10,
            'qualifications_id'=>1,
            "q1"=>"00:01:32.181",
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];

        Db::table('qualifications_results')->delete();
        Db::table('qualifications_results')->insert($qualificationsResults);
    }
}
