<?php

use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'texte' => '2020 All rights reserved. Designed by',
            'lien' => 'https://portfolio-sky.netlify.app/',
            'nom'  => 'Colorlib',
            'position' => true,
        ]);
    }
}
