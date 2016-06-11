<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHardwareSpecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware_spec', function (Blueprint $table) {
            $table->integer('hardware_id')->unsigned()->index();
            $table->integer('spec_id')->unsigned()->index();
            $table->string('value');

            $table->foreign('hardware_id')->references('id')->on('hardware')->onDelete('cascade');
            $table->foreign('spec_id')->references('id')->on('specs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hardware_spec');
    }
}
