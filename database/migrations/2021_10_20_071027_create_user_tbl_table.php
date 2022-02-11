<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sex');
            $table->integer('ref_id');
            $table->integer('ref_id1')->nullable();
            $table->integer('ref_id2')->nullable();
            $table->integer('ref_id3')->nullable();
            $table->integer('ref_id4')->nullable();
            $table->integer('ref_id5')->nullable();
            $table->string('mobile_no');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('product_name')->nullable();
            $table->string('amount')->nullable();
            $table->integer('reffered_by')->nullable();
            $table->integer('no_of_refs')->nullable()->default('0');

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
        Schema::dropIfExists('user_tbl');
    }
}
