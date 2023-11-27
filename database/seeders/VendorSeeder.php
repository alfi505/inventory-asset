<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VendorSeeder extends Seeder
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
            'nama' => 'Steven',
            'perusahaan' => 'ELS Komputer',
            'jabatan' => 'Teknisi',
            'alamat' => 'JL. Parangtritis',
            'kota' => 'Yogyakarta',
            'daerah' => 'Parangtritis',
            'kode_pos' => '55782',
            'no_telpon' => '08123456789',
            'fax' => '-',
            'tambahan' => '',
        ],[
            'nama' => 'Doni',
            'perusahaan' => 'Selalu Mundur',
            'jabatan' => 'Teknisi',
            'alamat' => 'JL. Parangtritis',
            'kota' => 'Yogyakarta',
            'daerah' => 'Parangtritis',
            'kode_pos' => '55782',
            'no_telpon' => '08123456789',
            'fax' => '-',
            'tambahan' => '',
        ],[
            'nama' => 'Diaz',
            'perusahaan' => 'Maju Jaya',
            'jabatan' => 'Teknisi',
            'alamat' => 'JL. Parangtritis',
            'kota' => 'Yogyakarta',
            'daerah' => 'Parangtritis',
            'kode_pos' => '55782',
            'no_telpon' => '08123456789',
            'fax' => '-',
            'tambahan' => '',
        ],[
            'nama' => 'Dimas',
            'perusahaan' => 'OKE Komputer',
            'jabatan' => 'Teknisi',
            'alamat' => 'JL. Parangtritis',
            'kota' => 'Yogyakarta',
            'daerah' => 'Parangtritis',
            'kode_pos' => '55782',
            'no_telpon' => '08123456789',
            'fax' => '-',
            'tambahan' => '',
        ]];

        DB::table("vendors")->insert($data);
    }
}