<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseFormPinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('course_form_pin', function (Blueprint $table) {
        $table->id('pin_id');
        $table->string('pin_num', 29);
        $table->integer('is_used')->default(2);
        $table->unsignedBigInteger('created_admin_id');
        $table->foreign('created_admin_id')->references('id')->on('admins'); // Assuming you have an 'admins' table
        $table->date('date_created')->default(now()->toDateString());
        $table->time('time_created')->default(now()->toTimeString());
        $table->unsignedBigInteger('student_used_id')->nullable();
        $table->foreign('student_used_id')->references('id')->on('students')->nullable(); // Assuming you have a 'students' table
        $table->date('date_used')->nullable();
        $table->time('time_used')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_form_pin');
    }
};
