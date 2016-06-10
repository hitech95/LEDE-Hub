<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffRoleHardwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_role_hardware', function (Blueprint $table) {
            $table->integer('staff_id')->unsigned()->index();
            $table->integer('role_id')->unsigned()->index();
            $table->integer('hardware_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('staff_role_hardware');
    }
}
