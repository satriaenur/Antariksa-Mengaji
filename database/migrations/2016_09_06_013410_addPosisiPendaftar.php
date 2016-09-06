<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPosisiPendaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jalurs', function (Blueprint $table) {
            $table->integer('posisi_ikhwan')->default(0);
            $table->integer('posisi_akhwat')->default(0);
            $table->boolean('is_waiting')->default(false);
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
            $table->integer('posisi_ikhwan');
            $table->integer('posisi_akhwat');
            $table->boolean('is_waiting');
        });
    }
}
