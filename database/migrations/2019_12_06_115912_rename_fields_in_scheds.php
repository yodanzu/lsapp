<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameFieldsInScheds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scheds', function (Blueprint $table) {
            $table->renameColumn('slot_code', 'slotCode');
            $table->renameColumn('start_date', 'startDate');
            $table->renameColumn('end_date', 'endDate');
            $table->renameColumn('room_id', 'roomId');
            $table->renameColumn('instructor_id', 'instructorId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scheds', function (Blueprint $table) {
            Schema::dropIfExists('scheds');
        });
    }
}
