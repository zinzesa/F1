<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults=[];

        $raceResults[]=[
            "id"=>1001,
            "driver_id"=>1,
            "race_id"=>10,
            "total_time"=>"01:33:58.348",
            "best_lap"=>67.012,
            "position"=>1,
            "points"=>25,
        ];
        $raceResults[]=[
            "id"=>1002,
            "driver_id"=>16,
            "race_id"=>10,
            "total_time"=>"01:34:07.918",
            "best_lap"=>69.990,
            "position"=>2,
            "points"=>18,
        ];
        $raceResults[]=[
            "id"=>1003,
            "driver_id"=>11,
            "race_id"=>10,
            "total_time"=>"01:34:12.516 ",
            "best_lap"=>69.317,
            "position"=>3,
            "points"=>15,
        ];
        $raceResults[]=[
            "id"=>1004,
            "driver_id"=>55,
            "race_id"=>10,
            "total_time"=>"01:34:16.996",
            "best_lap"=>69.348,
            "position"=>4,
            "points"=>12,
        ];
        $raceResults[]=[
            "id"=>1005,
            "driver_id"=>4,
            "race_id"=>10,
            "total_time"=>"01:34:20.888",
            "best_lap"=>69.877,
            "position"=>5,
            "points"=>10,
        ];
        $raceResults[]=[
            "id"=>1006,
            "driver_id"=>14,
            "race_id"=>10,
            "total_time"=>"01:34:49.376",
            "best_lap"=>69.512,
            "position"=>6,
            "points"=>8,
        ];
        $raceResults[]=[
            "id"=>1007,
            "driver_id"=>44,
            "race_id"=>10,
            "total_time"=>"01:34:59.161",
            "best_lap"=>70.457,
            "position"=>7,
            "points"=>6
        ];
        $raceResults[]=[
            "id"=>1008,
            "driver_id"=>63,
            "race_id"=>10,
            "total_time"=>"01:35:00.040",
            "best_lap"=>70.160,
            "position"=>8,
            "points"=>4
        ];
        $raceResults[]=[
            "id"=>1009,
            "driver_id"=>10,
            "race_id"=>10,
            "total_time"=>"01:35:02.750",
            "best_lap"=>70.344,
            "position"=>9,
            "points"=>2
        ];
        $raceResults[]=[
            "id"=>1010,
            "driver_id"=>18,
            "race_id"=>10,
            "total_time"=>"01:35:02.780",
            "best_lap"=>69.340,
            "position"=>10,
            "points"=>1
        ];
        $raceResults[]=[
            "id"=>1011,
            "driver_id"=>23,
            "race_id"=>10,
            "total_time"=>"01:35:03.449 ",
            "best_lap"=>70.604,
            "position"=>11,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>1012,
            "driver_id"=>31,
            "race_id"=>10,
            "total_time"=>"00:00:00.01",
            "best_lap"=>70.043,
            "position"=>12,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>1013,
            "driver_id"=>2,
            "race_id"=>10,
            "total_time"=>"00:00:00.01",
            "best_lap"=>70.501,
            "position"=>13,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>1014,
            "driver_id"=>22,
            "race_id"=>10,
            "total_time"=>"00:00:00.01",
            "best_lap"=>70.753,
            "position"=>14,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>1015,
            "driver_id"=>24,
            "race_id"=>10,
            "total_time"=>"00:00:00.01",
            "best_lap"=>70.697,
            "position"=>15,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>1016,
            "driver_id"=>77,
            "race_id"=>10,
            "total_time"=>"00:00:00.01",
            "best_lap"=>70.092,
            "position"=>16,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>1017,
            "driver_id"=>81,
            "race_id"=>10,
            "total_time"=>"00:00:00.01",
            "best_lap"=>70.006,
            "position"=>17,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>1018,
            "driver_id"=>22,
            "race_id"=>10,
            "total_time"=>"00:00:00.01",
            "best_lap"=>70.372,
            "position"=>18,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>1019,
            "driver_id"=>20,
            "race_id"=>10,
            "total_time"=>"00:00:00.01",
            "best_lap"=>71.516,
            "position"=>19,
            "points"=>null
        ];
        $raceResults[]=[
            "id"=>1020,
            "driver_id"=>27,
            "race_id"=>10,
            "total_time"=>null,
            "best_lap"=>null,
            "position"=>20,
            "points"=>null
        ];





        Db::table('race_results')->insert($raceResults);
    }
}
