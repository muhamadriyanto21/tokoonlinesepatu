<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorys')->insert([
            [
                'category_name' => 'Sepatu Pria'
            ],
            [
                'category_name' => 'Sepatu Wanita'
            ],
            [
                'category_name' => 'Olahraga & Outdoor'
            ],
            [
                'category_name' => 'Jam Tangan'
            ],
            [
                'category_name' => 'Tas Pria'
            ],
            [
                'category_name' => 'Tas Wanita'
            ],
            [
                'category_name' => 'Pakaian Pria'
            ],
            [
                'category_name' => 'Aksesoris'
            ],
        ]);
    }
}
// php artisan db:seed --class=UserSeeder
// php artisan db:seed --class=CategorySeeder
// php artisan db:seed --class=ProductSeeder
// php artisan db:seed --class=SvimageSeeder