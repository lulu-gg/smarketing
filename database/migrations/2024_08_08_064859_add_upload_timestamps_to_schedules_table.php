<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUploadTimestampsToSchedulesTable extends Migration
{
    public function up()
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->timestamp('check_in_uploaded_at')->nullable();
            $table->timestamp('check_out_uploaded_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropColumn('check_in_uploaded_at');
            $table->dropColumn('check_out_uploaded_at');
        });
    }
}
