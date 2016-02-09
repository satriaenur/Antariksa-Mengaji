<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsWaitingListColumnAtPendaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftars', function (Blueprint $table) {
            $table->boolean('is_waiting_list')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftars', function (Blueprint $table) {
            $table->dropColumn('is_waiting_list')->default(false);
        });
    }
}
