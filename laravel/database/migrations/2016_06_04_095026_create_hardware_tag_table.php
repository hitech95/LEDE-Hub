<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHardwareTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware_tag', function (Blueprint $table) {
            $table->integer('hardware_id')->unsigned()->index();
            $table->integer('tag_id')->unsigned()->index();

            $table->foreign('hardware_id')->references('id')->on('hardware')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hardware_tags');
    }
}
