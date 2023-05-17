<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Macbook M1',
            'price' => '2000',
            'description' => 'This is some text for the Macbook M1',
            'image' => '01.jpg',
        ]);

        Product::create([
            'name' => 'Macbook M2',
            'price' => '233',
            'description' => 'This is some text for the Macbook M2',
            'image' => '02.jpg',
        ]);

        Product::create([
            'name' => 'Iphone 13 Pro',
            'price' => '50',
            'description' => 'This is some text for the Iphone',
            'image' => '03.jpg',
        ]);

        Product::create([
            'name' => 'TV',
            'price' => '3000',
            'description' => 'This is some text for the TV',
            'image' => '04.jpg',
        ]);
    }
}
