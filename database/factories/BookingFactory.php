<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $bookingStatus = ['paid', 'unpaid'];
        $dateTime = Carbon::now();

        return [
            'admin_id' => rand(0, 3),
            'user_id' => rand(0, 10),
            'field_id' => 1,
            'price_id' => 1,
            'booking_code' => strtolower(date('D') . date('YmdHis')),
            'booking_status' => $bookingStatus[(rand(0, 1))],
            'booking_date' => $dateTime->toDateString('d-m-Y'),
            'booking_hour' => "08:00:00",
            'payment_type' => 'ovo',
            'total_payment' => 80000,
        ];
    }
}
