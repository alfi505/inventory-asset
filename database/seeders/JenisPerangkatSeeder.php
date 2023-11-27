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
            'keterangan' => 'Monitor',
        ],[
            'jenisperangkat' => 'KBR',
            'keterangan' => 'Keyboard',
        ],[
            'jenisperangkat' => 'MOS',
            'keterangan' => 'Mouse',
        ],[
            'jenisperangkat' => 'NET',
            'keterangan' => 'Network',
        ]];

        DB::table("jenis_perangkats")->insert($data);
    }
}