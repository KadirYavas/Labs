<?php

use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            'logo' => 'big-logo.png',
            'texte' => 'Get your freebie template now!',
            'navUn' => 'Home',
            'navDeux' => 'Services',
            'navTrois' => 'Blog',
            'navQuatre' => 'Contact',
        ]);
    }
}
