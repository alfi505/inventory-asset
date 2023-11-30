<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkstationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'no_ip_address' => '127.0.0.1',
            'hostname' => 'localhost',
        ],[
            'no_ip_address' => '127.0.0.2',
            'hostname' => 'oaaoee',
        ]];

        DB::table("workstations")->insert($data);
    }
}