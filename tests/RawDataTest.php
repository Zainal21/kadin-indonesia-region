<?php

use PHPUnit\Framework\TestCase;
use Zainal21\KadinIndoRegion\RawDataGetter as RawData;

/*
* Data Test
* (c) Muhamad Zainal Arifin <Zainal21 | muhammad.arifin@djelas.id> 
*/
class RawDataTest extends TestCase
{
    /**
     * Test Provinces Data
     *
     * @return void
     */
    public function testProvinces()
    {
        $data = RawData::getProvinces();

        $this->assertTrue(count($data) > 0);
    }

    /**
     * Test Regencies Data
     *
     * @return void
     */
    public function testRegencies()
    {
        $data = RawData::getRegencies();

        $this->assertTrue(count($data) > 0);
    }

    /**
     * Test Districts Data
     *
     * @return void
     */
    public function testDistricts()
    {
        $data = RawData::getDistricts();

        $this->assertTrue(count($data) > 0);
    }

    /**
     * Test Villages Data
     *
     * @return void
     */
    public function testVillages()
    {
        $data = RawData::getVillages();

        $this->assertTrue(count($data) > 0);
    }
}