<?php

namespace Database\Seeders;

use App\Models\Pic;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Software;
use App\Models\Workstation;
use App\Models\InventoryCpu;
use Illuminate\Database\Seeder;
use Database\Seeders\MerkSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\SoftwareSeeder;
use Database\Seeders\InventoryCpuSeeder;
use Database\Seeders\InventoryMouseSeeder;
use Database\Seeders\JenisPerangkatSeeder;
use Database\Seeders\DetailMouseXPICSeeder;
use Database\Seeders\InventoryMonitorSeeder;
use Database\Seeders\DetailMonitorXPICSeeder;
use Database\Seeders\InventoryKeyboardSeeder;
use Database\Seeders\DetailKeyboardXPICSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::factory(5)->create();
        // Pic::factory(5)->create();
        // InventoryCpu::factory(5)->create();
        $this->call(UserSeeder::class);
        // $this->call(InventoryCpuSeeder::class);
        // $this->call(InventoryMonitorSeeder::class);
        Vendor::factory(5)->create();
        Workstation::factory(5)->create();
        // $this->call(DetailMonitorXPICSeeder::class);
        // $this->call(InventoryKeyboardSeeder::class);
        // $this->call(InventoryMouseSeeder::class);
        $this->call(JenisPerangkatSeeder::class);
        // $this->call(DetailKeyboardXPICSeeder::class);
        // $this->call(DetailMouseXPICSeeder::class);
        Pic::factory(5)->create();
        // Software::factory(5)->create();
        $this->call(StatusSeeder::class);
        $this->call(MerkSeeder::class);
        $this->call(SoftwareSeeder::class);
    }
}