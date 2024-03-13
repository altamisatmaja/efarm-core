<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHewanTernakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hewan_ternak', function (Blueprint $table) {
            $table->increments('id_hewan_ternak')->primary();
            $table->integer('kondisi_hewan_id');
            $table->string('nama_hewan');
            $table->integer('jenis_gender_hewan_id');
            $table->dateTime('lahir_hewan');
            $table->string('deskripsi_hewan');
            $table->integer('jenis_hewan_id');
            $table->integer('partner_id');
            $table->integer('status_penjualan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hewan_ternak', function (Blueprint $table) {
            //
        });
    }
}
