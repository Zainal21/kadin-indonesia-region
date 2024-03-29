<?php

/*
* This file is part of the kadinIndoregion package.
* (c) Muhamad Zainal Arifin <Zainal21 | muhammad.arifin@djelas.id> 
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function(Blueprint $table){
            $table->char('id', 100)->primary();
            $table->string('name');
            $table->char('kadin_code', 16);
            $table->string('board_of_director')->nullable();
            $table->string('signature')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('provinces');
    }
}
