<?php

namespace Database\Seeders;

use App\Models\InventoryMonitor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryMonitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InventoryMonitor::truncate();
        InventoryMonitor::create([
            'id_monitor' => 'MAK/IT/MTR-LGH/0820/1056',
            'nama_komputer' => 'Racing Bulls',
            'nama_pic' => 'Azell',
            'id_cpu' => 'MAK/IT/CPU-RKT/0315/6106',
            'id_merk' => 'LGH',
            'id_jenisperangkat' => 'MTR',
            'id_ip' => '127.0.0.123',
            'serial_number' => '6RG6-RF45-GR32',
            'model_monitor' => 'Logitech Pro',
            'id_posisi' => '-',
            'admin' => 'Dre',
            'id_vendor' => 'ELS Komputer',
            'keterangan' => '',
            'status' => 'Continue - Baik',
        ]);

    }
}
