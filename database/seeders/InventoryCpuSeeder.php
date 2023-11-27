<?php

namespace Database\Seeders;

use App\Models\InventoryCpu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryCpuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InventoryCpu::truncate();
        InventoryCpu::create([
            'id_cpu' => 'MAK/IT/CPU-RKT/0820/6056',
            'nama_komputer' => 'Racing Bulls',
            'nama_pic' => 'Azell',
            'id_zona' => '1',
            'id_ip' => '1',
            'kategori' => 'Administrasi',
            'serial_number' => '6RG6-RF45-GR32',
            'os' => '6RG6-RF45-GR32',
            'processor' => '6RG6-RF45-GR32',
            'mainboard' => '6RG6-RF45-GR32',
            'ram' => 'Logitech Pro',
            'rom' => 'Logitech Pro',
            'vga' => 'Logitech Pro',
            'soundcard' => 'Logitech Pro',
            'cdroom' => 'Logitech Pro',
            'nic' => 'Logitech Pro',
            'mac' => 'Logitech Pro',
            'casing' => 'Logitech Pro',
            'id_vendor' => '1',
            'id_software' => '2',
            'tanggal_input' => now(),
            'status' => 'Continue - Baik',
        ]);
    }
}
