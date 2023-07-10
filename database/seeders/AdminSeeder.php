<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'password' => 'kandar123',
            'status' => '1',
            'level' => '1',
        ]);
    }
}