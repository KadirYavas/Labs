<?php

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'nom' => 'Smith',
            'prenom' => 'Michael',
            'fonction' => 'CEO Company',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'image' => '003.jpg',
        ]);
        DB::table('testimonials')->insert([
            'nom' => 'Lipa',
            'prenom' => 'Dua',
            'fonction' => 'Singer',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'image' => '002.jpg',
        ]);
        DB::table('testimonials')->insert([
            'nom' => 'Gueko',
            'prenom' => 'Seth',
            'fonction' => 'Barlou',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'image' => '001.jpg',
        ]);
        DB::table('testimonials')->insert([
            'nom' => 'Lipa',
            'prenom' => 'Dua',
            'fonction' => 'Singer',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'image' => '002.jpg',
        ]);
        DB::table('testimonials')->insert([
            'nom' => 'Gueko',
            'prenom' => 'Seth',
            'fonction' => 'Barlou',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'image' => '001.jpg',
        ]);
        DB::table('testimonials')->insert([
            'nom' => 'Smith',
            'prenom' => 'Michael',
            'fonction' => 'CEO Company',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'image' => '003.jpg',
        ]);
        DB::table('testimonials')->insert([
            'nom' => 'Lipa',
            'prenom' => 'Dua',
            'fonction' => 'Singer',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'image' => '002.jpg',
        ]);
    }
}
