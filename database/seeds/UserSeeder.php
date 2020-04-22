<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => '003.jpg',
        ]);
        DB::table('users')->insert([
            'name' => 'Mkdir',
            'email' => 'mkdir@mkdir.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 4,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => '002.jpg',
        ]);
        DB::table('users')->insert([
            'name' => 'Iron Man',
            'email' => 'iron@iron.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 10,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => '001.jpg',
        ]);
    }
}
