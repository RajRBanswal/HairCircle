<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor', function (Blueprint $table) {
            $table->id();
            $table->text('vens_id');
            $table->string('name');
            $table->string('gender');
            $table->string('shop_name');
            $table->string('shop_license');
            $table->string('address');
            $table->string('city');
            $table->integer('pincode');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('password');
            // $table->string('c_password');
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
        Schema::dropIfExists('vendor');
    }
}
