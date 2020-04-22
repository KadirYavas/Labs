<?php

use Illuminate\Database\Seeder;

class ReadiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('readies')->insert([
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
        ]);
    }
}
