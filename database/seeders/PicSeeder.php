<?php

namespace Database\Seeders;

use App\Models\Pic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pic::truncate();
        Pic::create([
            'id_pic' => '6754-8755',
            'nama_komputer' => 'Proapply',
            'nama_pic' => 'Gress',
            'kategori' => 'Administrasi',
            'id_zona' => '1',
            'id_cpu' => 'MAK/IT/CPU-RKT/0820/6056',
            'id_monitor' => 'fdsfds/fdgdfg',
            'id_keyboard' => 'fdsfds/fdgdfg',
            'id_mouse' => 'fdsfds/fdgdfg',
            'id_printer' => 'fdsfds/fdgdfg',
            'id_network' => 'fdsfds/fdgdfg',
            'id_speaker' => 'fdsfds/fdgdfg',
            'id_posisi' => 'fdsfds/fdgdfg',
        ]);
    }
}
