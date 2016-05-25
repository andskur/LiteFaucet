<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wallet extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->decimal('balance', 8, 8)->nullable();
            $table->decimal('total', 8, 8)->nullable();
            $table->decimal('refferal', 8, 8)->nullable();
            //$table->nullableTimestamps();
            $table->timestamp('last_payment')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wallets');
    }
}
