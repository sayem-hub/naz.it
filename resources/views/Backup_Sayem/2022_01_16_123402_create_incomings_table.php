<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name');
            $table->string('quantity')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_no')->nullable()->unique();
            $table->string('supplier');
            $table->date('pur_date');
            $table->integer('warranty')->nullable();
            $table->string('challan_no')->nullable();
            $table->string('challan_img')->nullable();
            $table->string('req_no')->nullable();
            $table->string('pur_type');
            $table->string('user_name');
            $table->string('department');
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
        Schema::dropIfExists('incomings');
    }
}
