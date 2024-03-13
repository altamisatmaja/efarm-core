<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partner', function (Blueprint $table) {
            $table->id_partner();
            $table->string('nama_partner');
            $table->string('perusaaan_partner');
            $table->string('alamat_partner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partner', function (Blueprint $table) {
            //
        });
    }
}
