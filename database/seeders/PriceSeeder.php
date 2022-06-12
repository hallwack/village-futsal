<?php

namespace Database\Seeders;

use App\Models\Price;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = ([
            [
                'price_type' => "Pagi",
                'price_pricing' => 80000,
                'created_at' => Carbon::now()
            ],
            [
                'price_type' => "Sore",
                'price_pricing' => 100000,
                'created_at' => Carbon::now()
            ],
            [
                'price_type' => "Malam",
                'price_pricing' => 120000,
                'created_at' => Carbon::now()
            ],
        ]);

        Price::insert($insert);
    }
}
