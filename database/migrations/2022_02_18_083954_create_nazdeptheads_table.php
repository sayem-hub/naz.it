<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNazdeptheadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nazdeptheads', function (Blueprint $table) {
            $table->id();

            $table->string('emp_id', 100)->unique();
            $table->string('employee_name', 200);
            $table->string('designation', 100);
            $table->string('section', 100)->nullable();
            $table->string('department', 100);
            $table->string('doj', 100);
            $table->string('mobile', 100)->unique();
            $table->string('email_id', 100)->unique();
            $table->string('mail_group', 100)->nullable();
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
        Schema::dropIfExists('nazdeptheads');
    }
}
