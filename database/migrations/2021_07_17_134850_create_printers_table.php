<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printers', function (Blueprint $table) {
            $table->id();
            $table->string('printer_id')->unique();
            $table->string('printer_brand');
            $table->string('printer_model');
            $table->string('serial_no')->unique()->nullable();
            $table->string('function');
            $table->string('section');
            $table->string('department');
            $table->string('user');
            $table->string('service_type');
            $table->string('status');
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('printers');
    }
}
