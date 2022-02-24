<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrerequisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prerequis', function (Blueprint $table) {
            $table->id();
            $table->string('preuser_id');
            $table->string('manual_num', 100);
            $table->string('item_des', 200);
            $table->string('size', 100)->nullable();
            $table->string('unit', 100);
            $table->string('qty', 100);
            $table->text('purpose');
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('prerequis');
    }
}
