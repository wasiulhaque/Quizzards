<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_tables', function (Blueprint $table) {
            $table->id('question_id');
            $table->integer('exam_id');
            $table->string('question_title');
            $table->string('correct_answer');
            $table->string('student_answer');
            $table->string('option_A');
            $table->string('option_B');
            $table->string('option_C');
            $table->string('option_D');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_tables');
    }
}
