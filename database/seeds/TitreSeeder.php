<?php

use Illuminate\Database\Seeder;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            'titreDiscover' => 'GET IN [ THE LAB ] AND DISCOVER THE WORLD',
            'titreClient' => 'WHAT OUR [ CLIENTS ] SAY',
            'titreService' => 'GET IN [ THE LAB ] AND SEE THE SERVICES',
            'titreTeam' => 'GET IN [ THE LAB ] AND MEET THE TEAM',
            'titreReady' => 'Are you [ ready ] to stand out?',
            'titreContact' => 'CONTACT [ US ]',
            'titreNewsletter' => '[ Newsletter ]',
        ]);
    }
}
