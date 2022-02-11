<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestion1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question1', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('questions');
            $table->string('answers');
            $table->string('type')->nullable();
            $table->string('freq_res_qua')->nullable();
            $table->string('reas_dura')->nullable();
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
        Schema::dropIfExists('question1');
    }
}
