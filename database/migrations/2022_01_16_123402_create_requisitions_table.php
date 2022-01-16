<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('requisition_no')->unique();
            $table->string('item_names')->nullable();
            $table->string('required_for');
            $table->string('designation')->nullable();
            $table->string('department');
            $table->date('requisition_date')->nullable();
            $table->date('received_date')->nullable();
            $table->string('Grn', 100)->nullable();
            $table->string('challan')->nullable();
            $table->string('pur_type', 100)->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('requisitions');
    }
}
