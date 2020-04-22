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
            'photo' => '003.jpg',
        ]);
        DB::table('users')->insert([
            'name' => 'Mkdir',
            'email' => 'mkdir@mkdir.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 4,
            'photo' => '002.jpg',
        ]);
        DB::table('users')->insert([
            'name' => 'Iron Man',
            'email' => 'iron@iron.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 10,
            'photo' => '001.jpg',
        ]);
        DB::table('users')->insert([
            'name' => 'Webmaster',
            'email' => 'web@web.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 2,
            'photo' => '001.jpg',
        ]);
        DB::table('users')->insert([
            'name' => 'Sales Supervisor',
            'email' => 'sales@sales.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 9,
            'photo' => '002.jpg',
        ]);
    }
}
