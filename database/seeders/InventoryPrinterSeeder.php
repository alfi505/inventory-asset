<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryPrinterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'id_printer' => 'MAK/IT/PTR-LGH/0820/7056',
            'merk_id' => '1',
            'jenisperangkat_id' => '1',
            'serial_number' => '6RG6-RF45-GR32',
            'model_printer' => 'Logitech Pro',
            'admin' => 'Dre',
            'tanggal_input' => '0820',
            'keterangan' => '',
            'status_id' => '1',
        ],[
            'id_printer' => 'MAK/IT/PTR-PHL/0311/7140',
            'merk_id' => '2',
            'jenisperangkat_id' => '1',
            'serial_number' => '6RG6-RF45-GR32',
            'model_printer' => 'Logitech Pro',
            'admin' => 'Dre',
            'tanggal_input' => '0311',
            'keterangan' => '',
            'status_id' => '1',
        ],[
            'id_printer' => 'MAK/IT/PTR-LGH/1030/7119',
            'merk_id' => '1',
            'jenisperangkat_id' => '1',
            'serial_number' => '6RG6-RF45-GR32',
            'model_printer' => 'Logitech Pro',
            'admin' => 'Dre',
            'tanggal_input' => '1030',
            'keterangan' => '',
            'status_id' => '1',
        ],];

        DB::table("inventory_printers")->insert($data);
    }
}