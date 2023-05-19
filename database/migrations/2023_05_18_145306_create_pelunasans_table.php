<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelunasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelunasans', function (Blueprint $table) {
            $table->id();
            $table->timestamp('receipt_date');
            $table->enum('payment_type',['Transfer','Cash']);
            $table->double('delivery_price');
            $table->double('receipt_amount');
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
        Schema::dropIfExists('pelunasans');
    }
}
