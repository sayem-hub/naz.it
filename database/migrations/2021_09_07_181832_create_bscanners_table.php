<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBscannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bscanners', function (Blueprint $table) {
            $table->id();
            $table->string('scanner_id')->unique();
            $table->string('brand');
            $table->string('model');
            $table->string('serial')->unique()->nullable();
            $table->string('type');
            $table->string('emp_id')->unique()->nullable();
            $table->string('user');
            $table->string('designation');
            $table->string('section');
            $table->string('department');
            $table->string('line_no');
            $table->string('status');
            // $table->string('notes')->nullable();
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
        Schema::dropIfExists('bscanners');
    }
}
