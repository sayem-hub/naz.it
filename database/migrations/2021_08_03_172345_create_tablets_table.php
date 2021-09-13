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
            $table->id();
            $table->string('tab_id')->unique();
            $table->string('brand');
            $table->string('model');
            $table->string('size');
            $table->string('serial')->unique()->nullable();
            $table->string('imei_1')->unique()->nullable();
            $table->string('imei_2')->unique()->nullable();
            $table->string('user');
            $table->string('emp_id')->unique()->nullable();
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
