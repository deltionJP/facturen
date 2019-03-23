<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('customer_id')->unsigned();
            $table->string('voorletter');
            $table->string('tussenvoegsel')->nullable();
            $table->string('achternaam');
            $table->string('email')->nullable();
            $table->string('adres');
            $table->string('postcode');
            $table->string('plaats');
            $table->timestamps();
        });
        DB::update("ALTER TABLE customers AUTO_INCREMENT = 15000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
