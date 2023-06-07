<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SvimageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('svimage')->insert([
            [
                'svimage_idproduct' => '1',
                'image' => 'F0oqp1MeK3lgReQKF5hvGUD7TLfjsKwUZBt1KlnQ.jpg',
            ],
            [
                'svimage_idproduct' => '2',
                'image' => 'kryiAYzbkEvUIsylCNPmKIhxcWEPVCoCyKQktdSU.jpg.jpg',
            ],
            [
                'svimage_idproduct' => '3',
                'image' => 'ovfLAag1fJxIWv1xVJdTw8dpBWuLqk8n1Fy8tU4i.jpg.jpg',
            ]
        ]);
    }
}
