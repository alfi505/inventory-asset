<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisPerangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [[
            'jenisperangkat' => 'MTR',
            'id_detail' => '1',
            'keterangan' => 'Monitor',
        ],[
            'jenisperangkat' => 'KBR',
            'id_detail' => '2',
            'keterangan' => 'Keyboard',
        ],[
            'jenisperangkat' => 'MOS',
            'id_detail' => '3',
            'keterangan' => 'Mouse',
        ],[
            'jenisperangkat' => 'SPK',
            'id_detail' => '4',
            'keterangan' => 'Speaker',
        ],[
            'jenisperangkat' => 'MIC',
            'id_detail' => '4',
            'keterangan' => 'Microphone',
        ],[
            'jenisperangkat' => 'CAM',
            'id_detail' => '4',
            'keterangan' => 'Camera',
        ],[
            'jenisperangkat' => 'HDS',
            'id_detail' => '4',
            'keterangan' => 'Headset',
        ],[
            'jenisperangkat' => 'SWC',
            'id_detail' => '5',
            'keterangan' => 'Switch',
        ],[
            'jenisperangkat' => 'STV',
            'id_detail' => '5',
            'keterangan' => 'Statvolt',
        ],[
            'jenisperangkat' => 'UPS',
            'id_detail' => '5',
            'keterangan' => 'Uninterruptable Power Supply',
        ],[
            'jenisperangkat' => 'BRD',
            'id_detail' => '5',
            'keterangan' => 'Bridge',
        ],[
            'jenisperangkat' => 'HUB',
            'id_detail' => '5',
            'keterangan' => 'Hub',
        ],[
            'jenisperangkat' => 'WAP',
            'id_detail' => '5',
            'keterangan' => 'Wireless Access Point',
        ],[
            'jenisperangkat' => 'NCP',
            'id_detail' => '5',
            'keterangan' => 'Net Computing',
        ],[
            'jenisperangkat' => 'PTS',
            'id_detail' => '5',
            'keterangan' => 'Print Server',
        ],[
            'jenisperangkat' => 'CPU',
            'id_detail' => '6',
            'keterangan' => 'Central Processing Unit',
        ],[
            'jenisperangkat' => 'PTR',
            'id_detail' => '7',
            'keterangan' => 'Printer',
        ],[
            'jenisperangkat' => 'SCN',
            'id_detail' => '7',
            'keterangan' => 'Scanner',
        ],[
            'jenisperangkat' => 'PLT',
            'id_detail' => '7',
            'keterangan' => 'Plotter',
        ],[
            'jenisperangkat' => 'FRT',
            'id_detail' => '7',
            'keterangan' => 'Finger Machine',
        ]];

        DB::table("jenis_perangkats")->insert($data);
    }
}