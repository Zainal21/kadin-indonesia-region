<?php

/*
 * This file is part of the kadinIndoregion package.
* OXY Creative | (c) Muhamad Zainal Arifin <Zainal21 | muhammad.arifin@djelas.id> 
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Zainal21\KadinIndoRegion\RawDataGetter;
use Illuminate\Support\Facades\DB;

class IndoRegionRegencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @deprecated
     * 
     * @return void
     */
    public function run()
    {
        // Get Data
        $regencies = RawDataGetter::getRegencies();

        // Insert Data to Database
        DB::table('regencies')->insert($regencies);
    }
}
