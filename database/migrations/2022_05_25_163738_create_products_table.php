<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->float('price');
            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('subcategory_id', 'fk_product_subcategory')->references('id')->on('subcategories')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id', 'fk_product_brand')->references('id')->on('brands')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('quantity')->nullable();
            $table->enum('status', [Product::DELETED,Product::RELEASED])->default(Product::DELETED);
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
        Schema::dropIfExists('products');
    }
}
