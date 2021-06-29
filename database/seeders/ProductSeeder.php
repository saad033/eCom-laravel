<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
            'name'=>'laptop',
            'price'=>'10000',
            'category'=>'laptop',
            'gallery'=>'https://commons.wikimedia.org/wiki/File:A_laptop.jpg#/media/File:A_laptop.jpg',
            'description'=>'A Laptop with 4gb ram and much more features'
        ]);
    }
}
