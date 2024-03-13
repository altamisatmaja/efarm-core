<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('review_product', function (Blueprint $table) {
            $table->increments('id_review_product')->primary();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('partner_id');
            $table->string('judul_review');
            $table->string('deskripsi_review');
            $table->integer('rating_id');
            $table->string('balasan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review_product', function (Blueprint $table) {
            //
        });
    }
}
