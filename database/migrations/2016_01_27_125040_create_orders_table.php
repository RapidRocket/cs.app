<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('application_id');
            $table->integer('payment_id')->default(0);
            $table->integer('cost')->default(0);
            $table->integer('payed')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('application_id')
                ->references('id')
                ->on('applications');
            /*$table->foreign('payment_id')
                ->references('id')
                ->on('payments');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
