<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailMonitorXPICSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'monitor_id' => 'MAK/IT/MTR-LGH/0820/1056',
            'pic_id' => '1',
            'vendor_id' => '1',
            'workstation_id' => '1'
        ],[
            'monitor_id' => 'MAK/IT/MTR-PHL/0311/1140',
            'pic_id' => '2',
            'vendor_id' => '1',
            'workstation_id' => '1'
        ],[
            'monitor_id' => 'MAK/IT/MTR-LGH/1030/1119',
            'pic_id' => '2',
            'vendor_id' => '1',
            'workstation_id' => '1'
        ]];

        DB::table("detail_monitor_x_p_i_c_s")->insert($data);
    }
}