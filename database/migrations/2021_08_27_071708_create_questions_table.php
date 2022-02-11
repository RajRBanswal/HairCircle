<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name');
            $table->string('mobile_no');
            $table->string('fquestions1')->nullable();
            $table->string('fanswers1')->nullable();
            $table->string('fquestions2')->nullable();
            $table->string('fanswers2')->nullable();
            $table->string('fquestions3')->nullable();
            $table->string('fanswers3')->nullable();
            $table->string('fquestions4')->nullable();
            $table->string('fanswers4')->nullable();
            $table->string('fquestions5')->nullable();
            $table->string('fanswers5')->nullable();
            $table->string('fquestions6')->nullable();
            $table->string('fanswers6')->nullable();
            $table->string('fquestions7')->nullable();
            $table->string('fanswers7')->nullable();
            $table->string('fquestions8')->nullable();
            $table->string('fanswers8')->nullable();
            $table->string('fquestions9')->nullable();
            $table->string('fanswers9')->nullable();
            $table->string('fquestions10')->nullable();
            $table->string('fanswers10')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
