<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('order_id')->unique();
            $table->integer('hw_type')->default(0);

            $table->tinyInteger('status')->default(0);

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            /*$table->foreign('order_id')
                ->references('id')
                ->on('orders');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applications');
    }

}

