<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnNamaFromEmailVerificationTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('email_verification_tokens', function (Blueprint $table) {
            $table->dropColumn('nama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('email_verification_tokens', function (Blueprint $table) {
            //
        });
    }
}
