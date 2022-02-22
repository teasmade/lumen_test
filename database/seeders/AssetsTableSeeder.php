<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create();

        $types = ['computer', 'phone'];
        // TODO - types x subtype constraints etc. in DB structure
        $subtypes = ['Windows', 'Mac', 'Linux', 'Android', 'IPhone'];
        $brands = ['Dell', 'Microsoft', 'Apple', 'Samsung'];
        $models = ['XPS', 'Macbook', 'IPhone 13', 'Galaxy S21'];
        $versions = ['2022', '2021', '2020', '2019'];
        $statuses = ['stock', 'rupture'];
        $networks = ['5G', '4G'];

        foreach (range(1, 20) as $index) {
            DB::table('assets')->insert([
                'type' => $faker->randomElement($types),
                'subtype' => $faker->randomElement($subtypes),
                'brand' => $faker->randomElement($brands),
                'model' => $faker->randomElement($models),
                'version' => $faker->randomElement($versions),
                'status' => $faker->randomElement($statuses),
                'available_date' => $faker->dateTimeBetween('-10 weeks', '+10 weeks'),
                'network_type' => $faker->randomElement($networks),
            ]);
        }
    }
}
