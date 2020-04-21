<?php

use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            'image' => '01.jpg',
        ]);
        DB::table('carousels')->insert([
            'image' => '02.jpg',
        ]);
    }
}
