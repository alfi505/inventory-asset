<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MerkSeeder extends Seeder
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
            'merk' => 'RKT',
            'keterangan' => 'Rakit',
        ],[
            'merk' => 'LGH',
            'keterangan' => 'Logitech',
        ],[
            'merk' => 'PHL',
            'keterangan' => 'Phillips',
        ],[
            'merk' => 'BTR',
            'keterangan' => 'Brother',
        ],[
            'merk' => 'LNV',
            'keterangan' => 'Lenovo',
        ]];

        DB::table("merks")->insert($data);
    }
}