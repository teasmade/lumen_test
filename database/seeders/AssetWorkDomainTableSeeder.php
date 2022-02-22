<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class AssetWorkDomainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create();

        $assetsIDs = DB::table('assets')->pluck('id');
        $workDomainIDs = DB::table('work_domains')->pluck('id');

        foreach ($assetsIDs as $assetsID) {
            $shuffledDomainIDs = $workDomainIDs->shuffle();
            $chance = 100;
            foreach ($shuffledDomainIDs as $shuffledID) {
                if ($chance > 75) {
                    DB::table('asset_work_domain')->insert([
                        'asset_id' => $assetsID,
                        'work_domain_id' => $shuffledID,
                    ]);
                }
                $chance -= rand(10, 40);
            };
        }
    }
}


/* for each asset
    add at least one work domain

    for each asset
        randomise order of work domains
        always add first work domain
        add each remaining work domain with diminishing probability
*/
