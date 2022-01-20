<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccameras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('camname');
            $table->string('camno', 150)->unique();
            $table->string('camlocation');
            $table->string('dvr_no', 150)->nullable();
            $table->string('status', 100);
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
        Schema::dropIfExists('ccameras');
    }
}
