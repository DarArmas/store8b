<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id', 'fk_colorproduct_color')->references('id')->on('colors')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'fk_colorproduct_product')->references('id')->on('categories')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color_product');
    }
}
