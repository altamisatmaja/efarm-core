<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengiriman', function (Blueprint $table) {
            $table->increments('id_pengiriman')->primary();
            $table->dateTime('tanggal_pengiriman');
            $table->dateTime('tanggal_sampai');
            $table->integer('status_pengiriman_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengiriman', function (Blueprint $table) {
            //
        });
    }
}
