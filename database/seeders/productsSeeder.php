<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder

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
                'name' => 'pizza 2',
                'price' => '999',
                'description' => 'abcdefghijklmnopqrstuvwxyz',
                'category' => 'food',
                'gallery' => 'https://images2.alphacoders.com/796/796169.jpg'

            ],
            [
                'name' => 'pizza 3',
                'price' => '999',
                'description' => 'abcdefghijklmnopqrstuvwxyz',
                'category' => 'food',
                'gallery' => 'https://images2.alphacoders.com/101/1012925.jpg'

            ],
            [
                'name' => 'pizza 4',
                'price' => '999',
                'description' => 'abcdefghijklmnopqrstuvwxyz',
                'category' => 'food',
                'gallery' => 'https://images7.alphacoders.com/991/991902.jpg'

            ],
            [
                'name' => 'pizza 5',
                'price' => '999',
                'description' => 'abcdefghijklmnopqrstuvwxyz',
                'category' => 'food',
                'gallery' => 'https://images.alphacoders.com/100/1002219.jpg'

            ]
        ]);
    }
}
