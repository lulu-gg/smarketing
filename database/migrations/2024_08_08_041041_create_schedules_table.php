<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('venue_name');
            $table->time('check_in_time');
            $table->time('check_out_time');
            $table->decimal('longitude', 11, 8); // Change precision to 11 and scale to 8
            $table->decimal('latitude', 10, 8); // Change precision to 10 and scale to 8
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
        Schema::dropIfExists('schedules');
    }
}
