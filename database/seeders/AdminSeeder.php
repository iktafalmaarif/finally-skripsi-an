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
            'email' => 'kandar@gmail.com',
            'password' => bcrypt('kandar@gmail.com'),
            'status' => '1',
            'role' => 'admin',
        ]);
    }
}
