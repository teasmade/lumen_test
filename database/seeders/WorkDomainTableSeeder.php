<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkDomainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domains = ['dev', 'design', 'rh', 'gestion'];
        foreach ($domains as $domain) {
            DB::table('work_domains')->insert([
                'domain' => $domain
            ]);
        }
    }
}
