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
            $table->bigIncrements('id');
            $table->string('Comid', 50)->unique();
            $table->string('Emp_id', 50)->nullable()->unique('Emp_id_UNIQUE');
            $table->string('User', 100);
            $table->string('Designation', 50)->nullable();
            $table->string('Comtype', 50);
            $table->string('Brand', 45)->nullable();
            $table->string('Model', 200)->nullable();
            $table->string('Serial_no', 100)->nullable();
            $table->string('Spec', 200)->nullable();
            $table->string('Monitor', 50)->nullable();
            $table->string('Keyboard', 50)->nullable();
            $table->string('Mouse', 50)->nullable();
            $table->string('ups', 50)->nullable();
            $table->string('Ipadd', 50)->nullable();
            $table->string('Email', 80)->nullable();
            $table->string('Section', 50);
            $table->string('Department', 50);
            $table->string('Status', 50);
            $table->string('Kp_status')->nullable();
            $table->string('Remarks')->nullable();
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
