<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailNetworkXPICSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'id_detailnetworkxpic' => '1',
            'network_id' => '1',
            'pic_id' => '1',
            'vendor_id' => '1',
            'workstation_id' => '1'
        ],[
            'id_detailnetworkxpic' => '2',
            'network_id' => '2',
            'pic_id' => '2',
            'vendor_id' => '1',
            'workstation_id' => '1'
        ]];

        DB::table("detail_network_x_p_i_c_s")->insert($data);
    }
}