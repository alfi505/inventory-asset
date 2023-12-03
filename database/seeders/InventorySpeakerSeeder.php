<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventorySpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'id_speaker' => 'MAK/IT/SPR-LGH/0820/5056',
            'merk_id' => '1',
            'jenisperangkat_id' => '1',
            'serial_number' => '6RG6-RF45-GR32',
            'model_speaker' => 'Logitech Pro',
            'admin' => 'Dre',
            'tanggal_input' => '0820',
            'keterangan' => '',
            'status_id' => '1',
        ],[
            'id_speaker' => 'MAK/IT/SPR-PHL/0311/5140',
            'merk_id' => '2',
            'jenisperangkat_id' => '1',
            'serial_number' => '6RG6-RF45-GR32',
            'model_speaker' => 'Logitech Pro',
            'admin' => 'Dre',
            'tanggal_input' => '0311',
            'keterangan' => '',
            'status_id' => '1',
        ],[
            'id_speaker' => 'MAK/IT/SPR-LGH/1030/5119',
            'merk_id' => '1',
            'jenisperangkat_id' => '1',
            'serial_number' => '6RG6-RF45-GR32',
            'model_speaker' => 'Logitech Pro',
            'admin' => 'Dre',
            'tanggal_input' => '1030',
            'keterangan' => '',
            'status_id' => '1',
        ],];

        DB::table("inventory_speakers")->insert($data);
    }
}
