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
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('set null');
            $table->string('billing_email');
            $table->string('billing_name');
            $table->string('courier');
            $table->string('ongkir');
            $table->string('billing_phone');
            $table->string('postalcode');
            $table->integer('subtotal');
            $table->integer('total');
            $table->boolean('shipped')->default(false);
            $table->string('address', 200);
            $table->string('error')->nullable();
            $table->string('invoice');
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
