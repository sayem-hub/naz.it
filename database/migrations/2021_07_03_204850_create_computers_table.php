<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('Comid')->unique();
            $table->string('Emp_id')->unique();
            $table->string('User');
            $table->string('Designation');
            $table->string('Comtype');
            $table->string('Brand')->nullable();
            $table->string('Model')->nullable();
            $table->string('Spec')->nullable();
            $table->string('Monitor');
            $table->string('Keyboard');
            $table->string('Mouse');
            $table->string('ups');
            $table->string('Ipadd');
            $table->string('Email');
            $table->string('Section');
            $table->string('Department');
            $table->string('Status');
            $table->string('Remarks');
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
        Schema::dropIfExists('computers');
    }
}
