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
            ['Sardines',6500,12000,150,20000,30,1],
            ['Baby Octopus',98000,120000,150,20000,30,1],
            ['Milk Fish',15000,22000,150,20000,30,1],
            ['Vannamei Shirmp',95000,110000,150,20000,30,1],
            ['Dorry Fillet',25000,35000,150,20000,30,1],
        ];
        
        
        foreach ($data as $item) {
            product::create([
                'name' => $item[0],
                'purchase' => $item[1],
                'sell' => $item[2],
                'storageCosts' => $item[3],
                'safetyStock' => $item[4],
                'leadtime' => $item[5],
                'available' => $item[6],
            ]);
        }
    }
}
