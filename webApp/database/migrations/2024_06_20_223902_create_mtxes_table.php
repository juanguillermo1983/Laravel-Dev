<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mtxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cdp');
            $table->unsignedBigInteger('sensor_a');
            $table->unsignedBigInteger('sensor_b');
            $table->unsignedBigInteger('sensor_c');
            $table->unsignedBigInteger('sensor_d');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mtxes');
    }
}
