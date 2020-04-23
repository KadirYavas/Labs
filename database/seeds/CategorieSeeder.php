<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'section' => 'Loredana Papp',
        ]);
        DB::table('categories')->insert([
            'section' => 'Vestibulum maximus',
        ]);
        DB::table('categories')->insert([
            'section' => 'Nisi eu lobortis pharetra',
        ]);
        DB::table('categories')->insert([
            'section' => 'Orci quam accumsan',
        ]);
        DB::table('categories')->insert([
            'section' => 'Auguen pharetra massa',
        ]);
        DB::table('categories')->insert([
            'section' => 'Tellus ut nulla',
        ]);
        DB::table('categories')->insert([
            'section' => 'Etiam egestas viverra',
        ]);
        DB::table('categories')->insert([
            'section' => 'Lorem Ipsum',
        ]);
        DB::table('categories')->insert([
            'section' => 'Bla bla toc',
        ]);
        DB::table('categories')->insert([
            'section' => 'MolenGeek',
        ]);
        DB::table('categories')->insert([
            'section' => 'Animeeee',
        ]);
    }
}
