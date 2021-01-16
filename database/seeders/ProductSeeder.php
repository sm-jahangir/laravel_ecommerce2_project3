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
        DB::table('products')->insert([
            [
                'name' => 'OPPO Mobile',
                'price' => '250',
                'description' => 'smartphone OPPO description 4 gb ram here description',
                'category' => 'Mobile',
                'gallery' => 'image2.jpg',

            ],
            [
                'name' => 'LG TV',
                'price' => '200',
                'description' => 'smartphone description 4 gb ram here description',
                'category' => 'Mobile',
                'gallery' => 'image1sdf.jpg',

            ],
            [
                'name' => 'LG Frize',
                'price' => '2000',
                'description' => 'smartphone description 4 gb ram here description',
                'category' => 'Mobile',
                'gallery' => 'image1fsah45.jpg',

            ],
            [
                'name' => 'SAMSUNG Mobile',
                'price' => '100',
                'description' => 'smartphone descripFASFASFDDSAFAFREtion 4 gb ram here description',
                'category' => 'Mobile',
                'gallery' => 'ima4654646ge1.jpg',

            ],
        ]);
    }
}
