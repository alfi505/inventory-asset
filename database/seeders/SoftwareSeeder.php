<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[[
            'nama_software' => 'MS Office 2019'
        ], [
            'nama_software' => 'Corel Draw'
        ], [
            'nama_software' => 'Adobe'
        ], [
            'nama_software' => 'Valorant'
        ], [
            'nama_software' => 'WhatsApp'
        ], [
            'nama_software' => 'CapCut'
        ]];

    DB::table("software")->insert($data);
    }
}