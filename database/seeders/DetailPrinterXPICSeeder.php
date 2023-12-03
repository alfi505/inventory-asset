<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailPrinterXPICSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'id_detailprinterxpic' => '1',
            'printer_id' => '1',
            'pic_id' => '1',
            'vendor_id' => '1',
            'workstation_id' => '1'
        ],[
            'id_detailprinterxpic' => '2',
            'printer_id' => '2',
            'pic_id' => '2',
            'vendor_id' => '1',
            'workstation_id' => '1'
        ]];

        DB::table("detail_printer_x_p_i_c_s")->insert($data);
    }
}