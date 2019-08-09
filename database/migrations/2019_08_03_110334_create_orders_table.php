<?php

use Illuminate\Support\Facades\Schema;
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
            $table->timestamps();
            $table->string('order_code')->unique();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('billing_email');
            $table->string('billing_name');
            $table->string('courier');
            $table->string('ongkir');
            $table->string('billing_phone');
            $table->string('postalcode');
            $table->integer('subtotal')->unsigned();
            $table->integer('total')->unsigned();
            $table->string('address', 200);
            $table->string('error')->nullable();
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('city');
            $table->integer('province_id')->unsigned();
            $table->foreign('province_id')->references('id')->on('province');
            $table->integer('total_order')->unsigned();
            $table->integer('no_resi')->unsigned()->nullable();
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status_order');
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
