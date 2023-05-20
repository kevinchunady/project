<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_deliveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('address_id');
            $table->date('delivery_date');
            $table->double('delivery_price');
            $table->enum('delivery_status',['Not delivered', 'On delivery', 'Success']);
            $table->text('surat_jalan');
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('accepted_at')->nullable();

            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('address_id')->references('id')->on('client_addresses');

            #$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_deliveries');
    }
}
