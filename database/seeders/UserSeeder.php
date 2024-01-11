<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
        ],[
            'name' => 'Andrew',
            'username' => 'andrewhehe',
            'password' => bcrypt('andrew'),
        ],[
            'name' => 'Alfi',
            'username' => 'alfi505',
            'password' => bcrypt('alfi'),
        ]];

        DB::table("users")->insert($data);
    }
}