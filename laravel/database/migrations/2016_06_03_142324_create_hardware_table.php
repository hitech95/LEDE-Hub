<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHardwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('hidden');
            $table->integer('platform_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->integer('brand_id')->unsigned()->nullable();
            $table->string('description', 250);
            $table->text('content');
            $table->timestamps();

            $table->foreign('platform_id')->references('id')->on('brands')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hardware');
    }
}
