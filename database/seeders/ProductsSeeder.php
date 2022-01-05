<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Samsung A52s',
                'price'=>'৳42000',
                'description'=>'A smartpone with Snapdragon 778G chipset with 8GB RAM and 128GB storage.',
                'category'=>'mobile',
                'gallery'=>'https://brotherselectronicsbd.com/image/cache/catalog/demo/product/Samsung/Smartphone/A52s%205G/A52s-5G-Purple-800x800.png'
            ],
            [
                'name'=>'Samsung A72',
                'price'=>'৳48000',
                'description'=>'A smartpone with Snapdragon 720G chipset with 8GB RAM and 256GB storage.',
                'category'=>'mobile',
                'gallery'=>'https://brotherselectronicsbd.com/image/cache/catalog/demo/product/Samsung/Smartphone/A72/A72-Blue-800x800.png'
            ],
            [
                'name'=>'Samsung Galaxy Note20 Ultra 5G',
                'price'=>'৳91000',
                'description'=>'A smartpone with Snapdragon 865+ chipset with 12GB RAM and 256GB storage.',
                'category'=>'mobile',
                'gallery'=>'https://brotherselectronicsbd.com/image/cache/catalog/demo/product/Samsung/Smartphone/Galaxy%20Note20%20Ultra/weg-800x800.jpg'
            ],
            [
                'name'=>'Samsung Galaxy Z Flip3 5G',
                'price'=>'৳92000',
                'description'=>'A smartpone with Snapdragon 888 5G chipset with 8GB RAM and 256GB storage.',
                'category'=>'mobile',
                'gallery'=>'https://brotherselectronicsbd.com/image/cache/catalog/demo/product/Samsung/Smartphone/Galaxy%20Z%20Flip3/Z-Flip3-Black-800x800.png'
            ]
            

            

        ]);
    }
}
