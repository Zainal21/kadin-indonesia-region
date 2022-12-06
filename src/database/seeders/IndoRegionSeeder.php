<?php

/*
* This file is part of the kadinIndoregion package.
* (c) Muhamad Zainal Arifin <Zainal21 | muhammad.arifin@djelas.id> 
*/

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndoRegionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(IndoRegionProvinceSeeder::class);
        $this->call(IndoRegionRegencySeeder::class);
        $this->call(IndoRegionDistrictSeeder::class);
    }
}