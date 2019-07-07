<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->string('id');
            $table->string('customer_id');
            $table->string('names')->default('user');
            $table->string('email')->default('email');
            $table->string('product')->default('email');
            $table->string('amount')->default('email');
            $table->string('currency')->default('email');
            $table->string('status')->default('email');
            $table->string('details')->default('email');
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
        Schema::dropIfExists('transactions');
    }
}
