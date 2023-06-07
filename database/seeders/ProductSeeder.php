<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDateTime = Carbon::now();

        DB::table('products')->insert([
            [
                'product_idcategory' => '1',
                'name_product' => 'Nike 901',
                'price' => '150000',
                'details' => 'sepatu bagus nike',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'product_idcategory' => '2',
                'name_product' => 'Ardiles 703',
                'price' => '800000',
                'details' => 'sepatu bagus ardiles',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'product_idcategory' => '5',
                'name_product' => 'Bata 382',
                'price' => '125000',
                'details' => 'sepatu bagus bata',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
        ]);
    }
}
