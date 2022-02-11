<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_product', function (Blueprint $table) {
            $table->id();
            $table->string('bill_no');
            $table->integer('product_id');
            $table->string('product_name');
            $table->string('batch_no');
            $table->integer('price');
            $table->string('expiry_date');
            $table->integer('quantity');
            $table->integer('total_amount');
            $table->integer('vendor_id');
            $table->string('name');
            $table->string('address');
            $table->integer('mobile_no');
            $table->string('email');
            $table->string('billing_date');
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
        Schema::dropIfExists('return_product');
    }
}
