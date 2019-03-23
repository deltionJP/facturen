<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productbestellingen', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('timestamp');
            $table->bigInteger('factuurnummer');
            $table->string('omschrijving');
            $table->integer('aantal');
            $table->integer('prijsperstuk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productbestellingen');
    }
}
