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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('invoice_id');
            $table->unsignedBigInteger('kwitansi_id');
            $table->unsignedBigInteger('facture_id');
            $table->unsignedBigInteger('pelunasan_id');
            $table->double('total_price');
            $table->enum('status',['Complete','Incomplete']);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            #$table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->foreign('kwitansi_id')->references('id')->on('kwitansis');
            $table->foreign('faktur_id')->references('id')->on('factures');
            $table->foreign('pelunasan_id')->references('id')->on('pelunasans');
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
