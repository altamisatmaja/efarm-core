<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKondisiHewanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kondisi_hewan', function (Blueprint $table) {
            $table->increments('id_kondisi_hewan')->primary();
            $table->string('nama_kondisi_hewan');
            $table->string('deskripsi_kondisi_hewan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kondisi_hewan', function (Blueprint $table) {
            //
        });
    }
}
