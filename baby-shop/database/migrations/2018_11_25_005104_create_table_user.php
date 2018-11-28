<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TK_Users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string("username","50");
            $table->string("password","32");
            $table->string("name","50");
            $table->Integer("femal");
            $table->string("phone","11");
            $table->string("city","50");
            $table->string("email","50");
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
        Schema::dropIfExists('TK_Users');
    }
}
