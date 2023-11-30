<?php

namespace Database\Seeders;

use App\Models\Vendor;
use App\Models\Workstation;
use Illuminate\Database\Seeder;
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
        $this->call(InventoryCpuSeeder::class);
        $this->call(PicSeeder::class);
        $this->call(InventoryMonitorSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(MerkSeeder::class);
        $this->call(JenisPerangkatSeeder::class);
        $this->call(DetailMonitorXPICSeeder::class);
        Workstation::factory(5)->create();
        Vendor::factory(5)->create();
    }
}