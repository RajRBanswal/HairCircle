<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_register', function (Blueprint $table) {
            $table->id();
            $table->text('patients_id');
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('religion');
            $table->string('medicin_pref');
            $table->string('profession');
            $table->string('reference');
            $table->integer('weight_in_kg');
            $table->integer('height_in_cm');
            $table->string('address');
            $table->string('city');
            $table->integer('pincode');
            $table->string('mobile_no');
            $table->string('code');
            $table->string('active');
            $table->string('email');
            $table->string('password');
            $table->string('check_me');




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
        Schema::dropIfExists('patient_register');
    }
}
