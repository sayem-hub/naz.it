<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateERequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_requests', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 200);
            $table->string('nick_name', 200)->nullable();
            $table->string('designation', 200);
            $table->string('office_id', 200)->unique();
            $table->string('section', 200)->nullable();
            $table->string('department', 200);
            $table->string('doj', 200);
            $table->string('mobile', 200)->unique();
            $table->string('pro_id', 200)->nullable();
            $table->string('mail_group', 200)->nullable();
            $table->string('referred_by', 200);
            $table->string('approved_by', 200)->nullable();
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
        Schema::dropIfExists('e_requests');
    }
}
