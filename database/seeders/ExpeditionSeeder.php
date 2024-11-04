<?php

namespace Database\Seeders;

use App\Models\expedition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpeditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['CMA CGM','1'],
            ['Maersk Line','1'],
            ['OOCL','1'],
            ['PIL Lines','1'],
        ];

        foreach ($data as $item) {
            expedition::create([
                'name' => $item[0],
                'available' => $item[1]
            ]);
        }
    }
}
