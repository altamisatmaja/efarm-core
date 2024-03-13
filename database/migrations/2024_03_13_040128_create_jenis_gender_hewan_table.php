<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisGenderHewanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jenis_gender_hewan', function (Blueprint $table) {
            $table->increments('id_jenis_gender_hewan')->primary();
            $table->string('nama_jenis_hewan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jenis_gender_hewan', function (Blueprint $table) {
            //
        });
    }
}
