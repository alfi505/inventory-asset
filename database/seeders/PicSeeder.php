<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'nama_pic' => 'Gress',
            'posisi_id' => '1',
            'id_cpu' => 'MAK/IT/CPU-RKT/0820/6056',
            'id_detailmonitorxpic' => 'fdsfds/fdgdfg',
            'id_keyboard' => 'fdsfds/fdgdfg',
            'id_mouse' => 'fdsfds/fdgdfg',
            'id_printer' => 'fdsfds/fdgdfg',
            'id_network' => 'fdsfds/fdgdfg',
            'id_speaker' => 'fdsfds/fdgdfg',
        ],[
            'nama_pic' => 'Giovani',
            'posisi_id' => '1',
            'id_cpu' => 'MAK/IT/CPU-RKT/0820/6056',
            'id_detailmonitorxpic' => 'fdsfds/fdgdfg',
            'id_keyboard' => 'fdsfds/fdgdfg',
            'id_mouse' => 'fdsfds/fdgdfg',
            'id_printer' => 'fdsfds/fdgdfg',
            'id_network' => 'fdsfds/fdgdfg',
            'id_speaker' => 'fdsfds/fdgdfg',
        ]];

        DB::table("pics")->insert($data);
    }
}