<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprequests', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id', 200)->unique();
            $table->string('emp_name',200);
            $table->string('designation',200);
            $table->string('department',100);
            $table->string('section',150);
            $table->string('doj',150);
            $table->string('report_to',200);
            $table->string('mobile',150)->unique();
            $table->string('current_comp',100);
            $table->string('is_checked',100);
            $table->string('required_for',255);
            $table->string('device_type',150);
            $table->string('primary_use',255);
            $table->string('display_size',100);
            $table->string('accessoires',255);
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
        Schema::dropIfExists('comprequests');
    }
}
