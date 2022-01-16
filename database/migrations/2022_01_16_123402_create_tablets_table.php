<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tab_id')->unique();
            $table->string('brand');
            $table->string('model');
            $table->string('size');
            $table->string('serial')->nullable()->unique('serial_UNIQUE');
            $table->string('imei_1')->nullable()->unique('imei_1_UNIQUE');
            $table->string('imei_2')->nullable()->unique('imei_2_UNIQUE');
            $table->string('user');
            $table->string('emp_id')->nullable()->unique('emp_id_UNIQUE');
            $table->string('designation');
            $table->string('section');
            $table->string('department');
            $table->string('line_no');
            $table->string('status');
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('tablets');
    }
}
