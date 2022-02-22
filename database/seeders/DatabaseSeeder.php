<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(WorkDomainTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AssetsTableSeeder::class);
        $this->call(AssetWorkDomainTableSeeder::class);
    }
}
