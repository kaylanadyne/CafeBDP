<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Added Start
        $products = [
            [
                'name' => 'Blueberry Cake',
                'image' => 'https://i.pinimg.com/564x/9e/d0/8a/9ed08a53b37d6daf8418cc01dd46a870.jpg',
                'price' => 6,
                'description' => 'brbrbrbrbrbbrbrbrb',
                'stok' => 10 
            ],
            [
                'name' => 'Laravel',
                'image' => 'https://dummyimage.com/200x200/E83A2D/fff&text=Laravel',
                'price' => 220,
                'description' => 'Laravel freamwork',
                'stok' => 10 
            ],
            [
                'name' => 'Python',
                'image' => 'https://dummyimage.com/200x200/000/00ff04&text=python',
                'price' => 300,
                'description' => 'Python Language',
                'stok' => 10 
            ],
            [
                'name' => 'Codeigniter',
                'image' => 'https://dummyimage.com/200x200/F03B06/000&text=CI',
                'price' => 110,
                'description' => 'Codeigniter freamwork',
                'stok' => 10 
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        //Added End
    }
}