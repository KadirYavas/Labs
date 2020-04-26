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
            'created_at' => '2017-11-03 19:44:53',
            'updated_at' => '2017-11-03 19:44:53',
        ]);
        DB::table('commentaires')->insert([
            'message' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article_id' => 2,
            'user_id' => 4,
            'created_at' => '2017-11-03 19:45:53',
            'updated_at' => '2017-11-03 19:45:53',
        ]);
        DB::table('commentaires')->insert([
            'message' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article_id' => 4,
            'user_id' => 5,
            'created_at' => '2017-11-03 19:46:53',
            'updated_at' => '2017-11-03 19:46:53',
        ]);
        DB::table('commentaires')->insert([
            'message' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article_id' => 5,
            'user_id' => 2,
            'created_at' => '2017-11-03 19:47:53',
            'updated_at' => '2017-11-03 19:47:53',
        ]);
        DB::table('commentaires')->insert([
            'message' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article_id' => 5,
            'user_id' => 8,
            'created_at' => '2017-11-03 19:49:53',
            'updated_at' => '2017-11-03 19:49:53',
        ]);
        DB::table('commentaires')->insert([
            'message' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article_id' => 6,
            'user_id' => 9,
            'created_at' => '2017-11-03 19:50:53',
            'updated_at' => '2017-11-03 19:50:53',
        ]);
        DB::table('commentaires')->insert([
            'message' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article_id' => 7,
            'user_id' => 3,
            'created_at' => '2017-11-03 19:51:53',
            'updated_at' => '2017-11-03 19:51:53',
        ]);
        DB::table('commentaires')->insert([
            'message' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article_id' => 1,
            'user_id' => 6,
            'created_at' => '2017-11-03 19:57:53',
            'updated_at' => '2017-11-03 19:57:53',
        ]);
        DB::table('commentaires')->insert([
            'message' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article_id' => 1,
            'user_id' => 8,
            'created_at' => '2017-11-03 19:54:53',
            'updated_at' => '2017-11-03 19:54:53',
        ]);
    }
}
