<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameCoursesColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->renameColumn('course_description', 'courseDescription');
            $table->renameColumn('subject_description', 'subjectDescription');
            $table->renameColumn('rank_requirements', 'rankRequirements');
            $table->renameColumn('course_fee', 'courseFee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            Schema::dropIfExists('courses');
        });
    }
}
