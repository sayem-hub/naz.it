<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetswitchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netswitches', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model')->nullable();
            $table->string('port_no');
            $table->string('location');
            $table->string('type');
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
        Schema::dropIfExists('netswitches');
    }
}
