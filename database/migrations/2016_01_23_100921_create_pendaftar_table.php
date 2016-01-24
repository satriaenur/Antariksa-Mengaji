<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('call_name');
            $table->date('birthdate');
            $table->string('phone');
            $table->string('email');
            $table->string('fb');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('address');
            $table->integer('province_id');
            $table->integer('city_id');
            $table->enum('time_zone', ['WIB', 'WITA', 'WIT', 'LN']);
            $table->enum('platform', ['android', 'ios', 'blackberry', 'other']);
            $table->boolean('whatsapp');
            $table->boolean('telegram');
            $table->text('experience');
            $table->text('expectation');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pendaftars');
    }
}
