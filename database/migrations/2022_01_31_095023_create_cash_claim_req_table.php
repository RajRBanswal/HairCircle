<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashClaimReqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_claim_req', function (Blueprint $table) {
            $table->id();
            $table->string('u_name');
            $table->string('mobile');
            $table->integer('points');
            $table->string('subject')->nullable();
            $table->string('upi_acc')->nullable();
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
        Schema::dropIfExists('cash_claim_req');
    }
}
