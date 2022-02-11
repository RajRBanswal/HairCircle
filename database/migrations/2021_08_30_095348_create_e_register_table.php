<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateERegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_register', function (Blueprint $table) {
            $table->id();
            $table->text('emps_id');
            $table->string('name');
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->integer('pincode');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('password');
            $table->string('aadhar_no');
            $table->string('aadhar')->nullable();
            $table->string('pan')->nullable();
            $table->string('passbook')->nullable();
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
        Schema::dropIfExists('e_register');
    }
}
