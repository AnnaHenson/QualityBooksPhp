<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('order_date')->useCurrent(true);
            $table->decimal('gst');
            $table->decimal('total');
            $table->decimal('grand_total');
            $table->string('city', 100)->nullable(true);
            $table->string('country', 50)->nullable(true);
            $table->string('first_name', 50)->nullable(true);
            $table->string('last_name', 50)->nullable(true);
            $table->string('phone', 15)->nullable(true);
            $table->string('postal_code', 15)->nullable(true);
            $table->smallInteger('status')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
