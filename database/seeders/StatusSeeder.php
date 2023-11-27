<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
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
            'status' => 'Continue - Baik',
            'keterangan' => '-',
        ],[
            'status' => 'Continue - Rusak',
            'keterangan' => '-',
        ],[
            'status' => 'Discontinue',
            'keterangan' => '-',
        ],[
            'status' => 'Dimusnahkan',
            'keterangan' => '-',
        ]];

        DB::table("statuses")->insert($data);
    }
}
