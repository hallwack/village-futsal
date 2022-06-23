<?php

namespace Database\Seeders;

use App\Models\Field;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
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
                'field_name' => "Lapangan 1",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'field_name' => "Lapangan 2",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'field_name' => "Lapangan 3",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        Field::insert($insert);
    }
}
