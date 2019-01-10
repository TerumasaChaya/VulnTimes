<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewCustomerTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NewCustomerTbl', function (Blueprint $table) {
            $table->increments('newCid');
            $table->string('address')->nullable(false);
            $table->string('ticketUrl')->unique()->nullable(false);
            $table->date('invalidDate')->nullable(false);
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
        Schema::dropIfExists('NewCustomerTbl');
    }
}
