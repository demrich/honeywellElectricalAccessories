<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('productId');
            $table->string('name');
            $table->string('description');
            $table->string('thumbnail');
            $table->string('categoryId')->nullable();
            $table->decimal('price',8,2)->default(0.00);
            $table->decimal('salePrice',8,2)->nullable();
            $table->integer('saleStatus')->default(0);
            $table->integer('active')->default(0);
            $table->integer('position')->nullable();
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
