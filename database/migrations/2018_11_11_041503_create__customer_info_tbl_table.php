<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerInfoTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CustomerInfoTbl', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string("login_id")->unique()->nullable(false);
            $table->string("firstName")->nullable(false);
            $table->string("lastName")->nullable(false);
            $table->string("address")->unique()->nullable(false);
            $table->string("passwd")->nullable(false);
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
        Schema::dropIfExists('customerInfoTbl');
    }
}
