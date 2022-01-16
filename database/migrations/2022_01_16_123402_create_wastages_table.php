<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWastagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wastages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name');
            $table->string('model')->nullable();
            $table->string('serial_no')->nullable()->unique();
            $table->string('problem')->nullable();
            $table->string('user')->nullable();
            $table->string('quantity', 45)->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('wastages');
    }
}
