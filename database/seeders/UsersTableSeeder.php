<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create();

        $workDomainIDs = DB::table('work_domains')->pluck('id');

        foreach (range(1, 20) as $index) {
            DB::table('users')->insert([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'work_domain_id' => $faker->randomElement($workDomainIDs),
            ]);
        }
    }
}
