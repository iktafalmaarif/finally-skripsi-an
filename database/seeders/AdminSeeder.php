<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'kandar',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'status' => '1',
            'level' => 'Admin',
        ]);
    }
}
