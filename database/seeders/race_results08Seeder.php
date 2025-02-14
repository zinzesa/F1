<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results08Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults=[];

        $raceResults[]=[
            "id"=>801,
            "driver_id"=>1,
            "race_id"=>8,
            "total_time"=>"01:27:57.940",
            "best_lap"=>76.330,
            "position"=>1,
            "points"=>25,
        ];
        $raceResults[]=[
            "id"=>802,
            "driver_id"=>44,
            "race_id"=>8,
            "total_time"=>"01:28:21.384",
            "best_lap"=>76.676,
            "position"=>2,
            "points"=>18,
        ];
        $raceResults[]=[
            "id"=>803,
            "driver_id"=>63,
            "race_id"=>8,
            "total_time"=>"01:28:29.683",
            "best_lap"=>77.875,
            "position"=>3,
            "points"=>15,
        ];
        $raceResults[]=[
            "id"=>804,
            "driver_id"=>11,
            "race_id"=>8,
            "total_time"=>"01:28:33.106 ",
            "best_lap"=>76.666,
            "position"=>4,
            "points"=>12,
        ];
        $raceResults[]=[
            "id"=>805,
            "driver_id"=>55,
            "race_id"=>8,
            "total_time"=>"01:28:33.106 ",
            "best_lap"=>78.403,
            "position"=>5,
            "points"=>10,
        ];
        $raceResults[]=[
            "id"=>806,
            "driver_id"=>18,
            "race_id"=>8,
            "total_time"=>"01:29:00.614",
            "best_lap"=>78.722,
            "position"=>6,
            "points"=>8,
        ];
        $raceResults[]=[
            "id"=>807,
            "driver_id"=>14,
            "race_id"=>8,
            "total_time"=>"01:29:01.421",
            "best_lap"=>78.083,
            "position"=>7,
            "points"=>6
        ];
        $raceResults[]=[
            "id"=>808,
            "driver_id"=>31,
            "race_id"=>8,
            "total_time"=>"01:29:06.536",
            "best_lap"=>78.946,
            "position"=>8,
            "points"=>4
        ];
        $raceResults[]=[
            "id"=>809,
            "driver_id"=>24,
            "race_id"=>8,
            "total_time"=>"01:29:09.172",
            "best_lap"=>78.904,
            "position"=>9,
            "points"=>2
        ];
        $raceResults[]=[
            "id"=>810,
            "driver_id"=>10,
            "race_id"=>8,
            "total_time"=>"01:29:10.824",
            "best_lap"=>78.375,
            "position"=>10,
            "points"=>1
        ];
        $raceResults[]=[
            "id"=>811,
            "driver_id"=>16,
            "race_id"=>8,
            "total_time"=>"01:29:11.713",
            "best_lap"=>78.357,
            "position"=>11,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>812,
            "driver_id"=>22,
            "race_id"=>8,
            "total_time"=>"01:29:12.710",
            "best_lap"=>77.561,
            "position"=>12,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>813,
            "driver_id"=>81,
            "race_id"=>8,
            "total_time"=>"00:00:00.01",
            "best_lap"=>78.679,
            "position"=>13,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>814,
            "driver_id"=>21,
            "race_id"=>8,
            "total_time"=>"00:00:00.01",
            "best_lap"=>78.594,
            "position"=>14,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>815,
            "driver_id"=>27,
            "race_id"=>8,
            "total_time"=>"00:00:00.01",
            "best_lap"=>77.680,
            "position"=>15,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>816,
            "driver_id"=>23,
            "race_id"=>8,
            "total_time"=>"00:00:00.01",
            "best_lap"=>79.133,
            "position"=>16,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>817,
            "driver_id"=>4,
            "race_id"=>8,
            "total_time"=>"00:00:00.01",
            "best_lap"=>77.182,
            "position"=>17,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>818,
            "driver_id"=>20,
            "race_id"=>8,
            "total_time"=>"00:00:00.01",
            "best_lap"=>78.069,
            "position"=>18,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>819,
            "driver_id"=>77,
            "race_id"=>8,
            "total_time"=>"00:00:00.01",
            "best_lap"=>78.242,
            "position"=>19,
            "points"=>null
        ];
        $raceResults[]=[
            "id"=>820,
            "driver_id"=>2,
            "race_id"=>8,
            "total_time"=>"00:00:00.01",
            "best_lap"=>79.247,
            "position"=>20,
            "points"=>null
        ];





        Db::table('race_results')->insert($raceResults);
    }
}
