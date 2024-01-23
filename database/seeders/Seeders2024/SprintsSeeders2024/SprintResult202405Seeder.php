<?php

namespace Database\Seeders\Seeders2024\SprintsSeeders2024;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class SprintResult202405Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprintResults=[];

        $sprintResults[]=[
            "id"=>20240501,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", //+48.052
            "position"=>1,
            "points"=>8,
        ];
        $sprintResults[]=[
            "id"=>20240502,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"",
            "position"=>2,
            "points"=>7,
        ];
        $sprintResults[]=[
            "id"=>20240503,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"",
            "position"=>3,
            "points"=>6,
        ];
        $sprintResults[]=[
            "id"=>20240504,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>4,
            "points"=>5,
        ];
        $sprintResults[]=[
            "id"=>20240505,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>5,
            "points"=>4,
        ];
        $sprintResults[]=[
            "id"=>20240506,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>6,
            "points"=>3,
        ];
        $sprintResults[]=[
            "id"=>20240507,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>7,
            "points"=>2
        ];
        $sprintResults[]=[
            "id"=>20240508,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>8,
            "points"=>1
        ];
        $sprintResults[]=[
            "id"=>20240509,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>9,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20240510,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>10,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20240511,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>11,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20240512,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>12,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20240513,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>13,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20240514,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>14,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20240515,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>15,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20240516,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>16,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20240517,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>17,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>20240518,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>"", 
            "position"=>null,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=>20240519,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>null, 
            "position"=>null,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=>20240520,
            "driver_id"=>0,
            "sprint_id"=>202405,
            "total_time"=>null, 
            "position"=>null,
            "points"=>null
        ];

        Db::table('sprint_results')->insert($sprintResults);
    }
}
