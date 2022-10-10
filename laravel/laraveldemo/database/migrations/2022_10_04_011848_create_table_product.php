<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table ->float('product_price'); 
            $table ->integer('quantity'); 
            $table ->string('product_description');
            $table->integer('category_id')->unsigned(); 
            $table ->foreign('category_id')->references('category_id')->on('categoryy');
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
        Schema::dropIfExists('table_product');
    }
};
