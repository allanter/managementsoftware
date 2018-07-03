<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('teacher'); //class must have 1 teacher
            $table->integer('students'); //class can have one or many students

            // FK. IT WORKED!! AFTER I MIGRATED THIS FILE LAST!!!

            $table->unsignedInteger('teachers_id');

            $table->foreign('teachers_id')->references('id')->on('teachers');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
