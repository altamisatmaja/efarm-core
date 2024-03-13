<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeternakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peternakan', function (Blueprint $table) {
            $table->id_peternakan();
            $table->integer('kondisi_hewan_id');
            $table->string('nama_hewan');
            $table->integer('jenis_gender_hewan_id');
            $table->dateTime('lahir_hewan');
            $table->string('deksripsi_hewan');
            $table->integer('user_id');
            $table->integer('jenis_hewan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peternakan', function (Blueprint $table) {
            //
        });
    }
}
