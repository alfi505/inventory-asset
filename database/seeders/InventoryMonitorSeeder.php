<?php

namespace Database\Seeders;

use App\Models\InventoryMonitor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoryMonitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'id_monitor' => 'MAK/IT/MTR-LGH/0820/1056',
            'nama_komputer' => 'Racing Bulls',
            'nama_pic' => 'Azell',
            'id_cpu' => 'MAK/IT/CPU-RKT/0315/6106',
            'merk_id' => '1',
            'jenisperangkat_id' => '1',
            'id_ip' => '127.0.0.123',
            'serial_number' => '6RG6-RF45-GR32',
            'model_monitor' => 'Logitech Pro',
            'id_posisi' => '-',
            'admin' => 'Dre',
            'vendor_id' => '1',
            'keterangan' => '',
            'status_id' => '1',
        ],[
            'id_monitor' => 'MAK/IT/MTR-PHL/0311/1140',
            'nama_komputer' => 'Mercedes AMG Formula 1 Team',
            'nama_pic' => 'George Russel',
            'id_cpu' => 'MAK/IT/CPU-RKT/0315/6105',
            'merk_id' => '2',
            'jenisperangkat_id' => '1',
            'id_ip' => '127.0.0.126',
            'serial_number' => '6RG6-RF45-GR32',
            'model_monitor' => 'Logitech Pro',
            'id_posisi' => '--',
            'admin' => 'Dre',
            'vendor_id' => '2',
            'keterangan' => '',
            'status_id' => '1',
        ],[
            'id_monitor' => 'MAK/IT/MTR-LGH/1030/1119',
            'nama_komputer' => 'Oracle Red Bull Racing',
            'nama_pic' => 'Max Verstappen',
            'id_cpu' => 'MAK/IT/CPU-RKT/0315/6109',
            'merk_id' => '1',
            'jenisperangkat_id' => '1',
            'id_ip' => '127.0.0.124',
            'serial_number' => '6RG6-RF45-GR32',
            'model_monitor' => 'Logitech Pro',
            'id_posisi' => '---',
            'admin' => 'Dre',
            'vendor_id' => '1',
            'keterangan' => '',
            'status_id' => '1',
        ],];

        DB::table("inventory_monitors")->insert($data);

    }
}