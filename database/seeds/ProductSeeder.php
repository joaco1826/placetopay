<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::create([
            "name" => "Manzana",
            "image" => "img/manzana.jpg",
            "price" => "10500"
        ]);
    }
}
