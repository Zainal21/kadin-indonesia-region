<?php

/*
* This file is part of the kadinIndoregion package.
* (c) Muhamad Zainal Arifin <Zainal21 | muhammad.arifin@djelas.id> 
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegenciesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regencies', function(Blueprint $table){
            $table->char('id', 100)->primary();
            $table->char('province_id', 2);
            $table->string('name', 50);
            $table->foreign('province_id')
                ->references('id')
                ->on('provinces')
                ->onUpdate('cascade')->onDelete('restrict');
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
        Schema::drop('regencies');
    }
}
