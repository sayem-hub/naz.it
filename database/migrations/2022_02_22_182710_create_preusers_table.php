<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preusers', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id', 100);
            $table->string('employee_name', 100);
            $table->string('designation', 100);
            $table->string('section', 100);
            $table->string('department', 100);
            $table->string('mobile', 100);
            $table->string('reference', 100)->nullable();
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
        Schema::dropIfExists('preusers');
    }
}
