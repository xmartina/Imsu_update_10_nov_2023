<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseFormPinTable extends Migration
{
    public function up()
    {
        Schema::create('course_form_pin', function (Blueprint $table) {
            $table->id(); // Use the default 'id' column for the primary key
            $table->string('pin_num', 29);
            $table->integer('is_used')->default(2);
            $table->unsignedBigInteger('created_admin_id');
            $table->foreign('created_admin_id')->references('id')->on('admins');
            $table->date('date_created')->default(DB::raw('CURRENT_DATE'));
            $table->time('time_created')->default(DB::raw('CURRENT_TIME'));
            $table->unsignedBigInteger('student_used_id')->nullable();
            $table->foreign('student_used_id')->references('id')->on('students')->nullable();
            $table->date('date_used')->nullable();
            $table->time('time_used')->nullable();
            $table->timestamps(); // Add timestamps to automatically manage created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_form_pin');
    }
}
