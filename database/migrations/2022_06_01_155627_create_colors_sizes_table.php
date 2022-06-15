<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorsSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors_sizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id', 'fk_colorsize_color')->references('id')->on('colors')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('size_id');
            $table->foreign('size_id', 'fk_colorsize_size')->references('id')->on('sizes')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('colors_sizes');
    }
}
