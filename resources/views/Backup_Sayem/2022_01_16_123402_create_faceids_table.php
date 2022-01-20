<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaceidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faceids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('machine_name');
            $table->string('machine_id');
            $table->string('ip_address');
            $table->string('serial_no');
            $table->string('type');
            $table->string('model');
            $table->string('location');
            $table->string('status');
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
        Schema::dropIfExists('faceids');
    }
}
