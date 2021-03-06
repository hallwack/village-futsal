<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Admin::factory(3)->create();
        \App\Models\Booking::factory(10)->create();
        $this->call(PriceSeeder::class);
        $this->call(FieldSeeder::class);
    }
}
