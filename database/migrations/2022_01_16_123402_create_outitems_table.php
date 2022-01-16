<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Iname', 100)->nullable();
            $table->string('Brand', 100)->nullable();
            $table->string('Model', 100)->nullable();
            $table->string('Serial', 100)->nullable();
            $table->string('User', 100);
            $table->string('Section', 100);
            $table->string('Warranty', 100)->nullable();
            $table->string('Supplier', 100)->nullable();
            $table->date('Purdate')->nullable();
            $table->date('Outdate');
            $table->string('Wty_remain', 200)->nullable();
            $table->string('Sentfor', 100);
            $table->string('Problems')->nullable();
            $table->string('Notes', 200)->nullable();
            $table->string('Gpno', 100)->nullable();
            $table->string('To', 45)->nullable();
            $table->string('Grn', 100)->nullable();
            $table->string('Status', 100);
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
        Schema::dropIfExists('outitems');
    }
}
