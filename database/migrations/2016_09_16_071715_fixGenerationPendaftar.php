<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixGenerationPendaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jalurs', function (Blueprint $table) {
            $table->dropColumn('generation');
            $table->integer('generation_ikhwan')->default(1);
            $table->integer('generation_akhwat')->default(1);
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
            //
        });
    }
}
