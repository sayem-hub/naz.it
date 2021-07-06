<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateBrothersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brothers', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('machine_name');
            $table->string('serial_no')->unique();
            $table->integer('machine_no');
            $table->string('supplier');
            $table->string('line_no');
            $table->string('unit');
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
        Schema::dropIfExists('brothers');
    }
}
