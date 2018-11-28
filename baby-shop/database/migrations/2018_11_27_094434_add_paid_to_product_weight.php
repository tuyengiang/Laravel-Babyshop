<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaidToProductWeight extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_weight', function (Blueprint $table) {
            $table->string('age',15)->before('weight');
            $table->string('size',15)->before('weight');
            $table->string('height',15)->before('weight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_weight', function (Blueprint $table) {
            //
        });
    }
}
