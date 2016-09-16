<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQuotaTerisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jalurs', function (Blueprint $table) {
            $table->integer('pendaftar_ikhwan')->default(0);
            $table->integer('pendaftar_akhwat')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jalurs', function (Blueprint $table) {
            $table->integer('pendaftar_ikhwan');
            $table->integer('pendaftar_akhwat');
        });
    }
}
