<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturen', function (Blueprint $table) {
            // $table->bigInteger('factuurnummer');
            $table->bigIncrements('factuurnummer')->unsigned();
            $table->date('factuurdatum')->default(Carbon::now());
            $table->time('factuurtijd')->default(Carbon::now());
            $table->integer('betaald')->default(0);
            $table->integer('customer_id');
            $table->timestamp('timestamp');
        });
        DB::update("ALTER TABLE facturen AUTO_INCREMENT = 201900;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturen');
    }
}
