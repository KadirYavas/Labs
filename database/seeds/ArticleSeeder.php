<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'photo' => 'card-3.jpg',
            'titre' => 'SMART MARKETING',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'users_id' => 2,
            'categorie_id' => 4,
            'valide' => true,
            'created_at' => '2020-04-23 19:47:53',
            'updated_at' => '2020-04-23 19:47:53',
        ]);
        DB::table('articles')->insert([
            'photo' => 'card-2.jpg',
            'titre' => 'PROJECTS ONLINE',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'users_id' => 2,
            'categorie_id' => 7,
            'valide' => true,
            'created_at' => '2020-04-23 19:48:53',
            'updated_at' => '2020-04-23 19:48:53',
        ]);
        DB::table('articles')->insert([
            'photo' => 'card-1.jpg',
            'titre' => 'GET IN THE LAB',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'users_id' => 2,
            'categorie_id' => 10,
            'valide' => true,
            'created_at' => '2020-04-23 19:49:53',
            'updated_at' => '2020-04-23 19:49:53',
        ]);
        DB::table('articles')->insert([
            'photo' => 'card-2.jpg',
            'titre' => 'GET IN THE LAB',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'users_id' => 2,
            'categorie_id' => 2,
            'valide' => false,
            'created_at' => '2020-04-23 19:46:53',
            'updated_at' => '2020-04-23 19:46:53',
        ]);
        DB::table('articles')->insert([
            'photo' => 'blog-3.jpg',
            'titre' => 'Just a simple blog post',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst.

            Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem.',
            'users_id' => 2,
            'categorie_id' => 1,
            'valide' => true,
            'created_at' => '2020-04-23 19:42:53',
            'updated_at' => '2020-04-23 19:42:53',
        ]);
        DB::table('articles')->insert([
            'photo' => 'blog-1.jpg',
            'titre' => 'Just a simple blog post',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst.

            Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem.',
            'users_id' => 2,
            'categorie_id' => 1,
            'valide' => true,
            'created_at' => '2020-04-23 19:44:53',
            'updated_at' => '2020-04-23 19:44:53',
        ]);
        DB::table('articles')->insert([
            'photo' => 'blog-2.jpg',
            'titre' => 'Just a simple blog post',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst.

            Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem.',
            'users_id' => 2,
            'categorie_id' => 1,
            'valide' => true,
            'created_at' => '2020-04-23 19:43:53',
            'updated_at' => '2020-04-23 19:43:53',
        ]);
        DB::table('article_tag')->insert([
            'tag_id' => Tag::inRandomOrder()->first()->id,
            'article_id' => Article::inRandomOrder()->first()->id,
        ]);
        DB::table('article_tag')->insert([
            'tag_id' => Tag::inRandomOrder()->first()->id,
            'article_id' => Article::inRandomOrder()->first()->id,
        ]);
        DB::table('article_tag')->insert([
            'tag_id' => Tag::inRandomOrder()->first()->id,
            'article_id' => Article::inRandomOrder()->first()->id,
        ]);
        DB::table('article_tag')->insert([
            'tag_id' => Tag::inRandomOrder()->first()->id,
            'article_id' => Article::inRandomOrder()->first()->id,
        ]);
        DB::table('article_tag')->insert([
            'tag_id' => Tag::inRandomOrder()->first()->id,
            'article_id' => Article::inRandomOrder()->first()->id,
        ]);
        DB::table('article_tag')->insert([
            'tag_id' => Tag::inRandomOrder()->first()->id,
            'article_id' => Article::inRandomOrder()->first()->id,
        ]);
        DB::table('article_tag')->insert([
            'tag_id' => Tag::inRandomOrder()->first()->id,
            'article_id' => Article::inRandomOrder()->first()->id,
        ]);
    }
}
