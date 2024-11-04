<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Black Tuna','1000000','1'],
            ['White Tuna','1000000','1'],
            ['Brown Tuna','1000000','1'],
            ['Yellow Tuna','1000000','1'],
            ['Purple Tuna','1000000','1'],
        ];

        foreach ($data as $item) {
            product::create([
                'name' => $item[0],
                'price' => $item[1],
                'available' => $item[2]
            ]);
        }
    }
}
