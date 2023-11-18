<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<=100;$i++){
        $user = new User;
        $user->name = $faker->name;
        $user->age = $faker->numberBetween(18, 80);
        $user->email = $faker->unique()->safeEmail;
        $user->phone = $faker->numberBetween(9900000000, 9999999999);
        $user->save();
        }
    }
}
