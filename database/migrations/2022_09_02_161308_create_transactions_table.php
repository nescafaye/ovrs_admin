<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transactionNo');

            $table->foreignId('commuterId')
            ->constrained('commuters','comm_id')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->integer('seatsTaken');
            $table->double('totalAmount');
            $table->dateTime('departureDate');
            $table->dateTime('returnDate')->nullable();
            $table->double('fare');
            $table->string('paymentMethod');
            $table->timestamp('transactionTime');
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
};
