<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CompanySeeder::class,
            CountrySeeder::class,
            HajjOfficeSeeder::class,
            JamaratLevelSeeder::class, 
            PrimaryRoadSeeder::class,
            residentialAreaSeeder::class,
            plotSeeder::class,
            actualLocationsSeeder::class,
            officeSeeder::class,
            PathSeeder::class
        ]);
    }
    
}
