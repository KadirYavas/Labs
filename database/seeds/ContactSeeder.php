<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'description' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'paysville' => 'C/ Libertad, 34',
            'adresse' => '05200 Arévalo',
            'numero' => '0034 37483 2445 322',
            'email' => 'hello@company.com',
        ]);
    }
}
