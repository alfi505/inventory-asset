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
            'detail' => '1',
            'keterangan' => 'Monitor',
        ],[
            'jenisperangkat' => 'KBR',
            'detail' => '2',
            'keterangan' => 'Keyboard',
        ],[
            'jenisperangkat' => 'MOS',
            'detail' => '3',
            'keterangan' => 'Mouse',
        ],[
            'jenisperangkat' => 'SPK',
            'detail' => '4',
            'keterangan' => 'Speaker',
        ],[
            'jenisperangkat' => 'MIC',
            'detail' => '4',
            'keterangan' => 'Microphone',
        ],[
            'jenisperangkat' => 'CAM',
            'detail' => '4',
            'keterangan' => 'Camera',
        ],[
            'jenisperangkat' => 'HDS',
            'detail' => '4',
            'keterangan' => 'Headset',
        ],[
            'jenisperangkat' => 'SWC',
            'detail' => '5',
            'keterangan' => 'Switch',
        ],[
            'jenisperangkat' => 'STV',
            'detail' => '5',
            'keterangan' => 'Statvolt',
        ],[
            'jenisperangkat' => 'UPS',
            'detail' => '5',
            'keterangan' => 'Uninterruptable Power Supply',
        ],[
            'jenisperangkat' => 'BRD',
            'detail' => '5',
            'keterangan' => 'Bridge',
        ],[
            'jenisperangkat' => 'HUB',
            'detail' => '5',
            'keterangan' => 'Hub',
        ],[
            'jenisperangkat' => 'WAP',
            'detail' => '5',
            'keterangan' => 'Wireless Access Point',
        ],[
            'jenisperangkat' => 'NCP',
            'detail' => '5',
            'keterangan' => 'Net Computing',
        ],[
            'jenisperangkat' => 'PTS',
            'detail' => '5',
            'keterangan' => 'Print Server',
        ],[
            'jenisperangkat' => 'CPU',
            'detail' => '6',
            'keterangan' => 'Central Processing Unit',
        ],[
            'jenisperangkat' => 'PTR',
            'detail' => '7',
            'keterangan' => 'Printer',
        ],[
            'jenisperangkat' => 'SCN',
            'detail' => '7',
            'keterangan' => 'Scanner',
        ],[
            'jenisperangkat' => 'PLT',
            'detail' => '7',
            'keterangan' => 'Plotter',
        ],[
            'jenisperangkat' => 'FRT',
            'detail' => '7',
            'keterangan' => 'Finger Machine',
        ]];

        DB::table("jenis_perangkats")->insert($data);
    }
}