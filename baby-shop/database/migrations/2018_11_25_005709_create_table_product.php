<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduct extends Migration
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
            $table->string('id_product','15');
            $table->string('name_product','100');
            $table->Integer('count');
            $table->datetime('date_add');
            $table->string('price','15');
            $table->string('price_sale','15');
            $table->string('images','100');
            $table->Integer('id_images');
            $table->Integer('id_weight');
            $table->Integer('id_terms');
            $table->string('slug');
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
