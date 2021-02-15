<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_tables', function (Blueprint $table) {
            $table->id('quiz_id');
            $table->integer('teacher_id');
            $table->string('quiz_title');
            $table->integer('marks');
            $table->time('starting_Time');
            $table->time('ending_time');
            $table->string('quiz_type');
            $table->string('topic');
            $table->string('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_tables');
    }
}
