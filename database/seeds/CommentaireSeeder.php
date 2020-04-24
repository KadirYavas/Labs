<?php

use Illuminate\Database\Seeder;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            'message' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article_id' => 1,
            'user_id' => 3,
            'created_at' => '2017-11-03 19:43:53',
            'updated_at' => '2017-11-03 19:43:53',
        ]);
        DB::table('commentaires')->insert([
            'message' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article_id' => 1,
            'user_id' => 2,
            'created_at' => '2017-11-03 19:43:53',
            'updated_at' => '2017-11-03 19:43:53',
        ]);
    }
}
