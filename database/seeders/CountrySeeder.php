<?php

namespace Database\Seeders;

use App\Models\country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['New Zealand','Auckland','1'],
            ['Florida','Miami','1'],
            ['Australia','Australia','1'],
            ['America Samoa','Pago Pago','1'],
            ['Hawaii','Honolulu','1'],
        ];

        foreach ($data as $item) {
            country::create([
                'nation' => $item[0],
                'district' => $item[1],
                'available' => $item[2]
            ]);
        }
    }
}
