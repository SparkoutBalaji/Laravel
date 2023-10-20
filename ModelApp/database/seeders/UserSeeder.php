<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'id'=>111,
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>'Admin@123'
        ]);
    }
}
