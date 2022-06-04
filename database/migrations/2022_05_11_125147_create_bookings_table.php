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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id');
            $table->foreignId('user_id');
            $table->foreignId('field_id');
            $table->foreignId('price_id');
            $table->string('booking_code');
            $table->enum('booking_status', ['paid', 'unpaid']);
            $table->date('booking_date');
            $table->time('booking_hour');
            $table->string('payment_type');
            $table->double('total_payment');
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
        Schema::dropIfExists('bookings');
    }
};
