<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_enrolls', function (Blueprint $table) {
            $table->id('quiz_id');
            $table->integer('teacher_id');
            $table->integer('student_id');
            $table->integer('total_marks');
            $table->integer('result');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_enrolls');
    }
}
