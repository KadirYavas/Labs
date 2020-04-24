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
            'photo' => '3.jpg',
            'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
        DB::table('users')->insert([
            'name' => 'Rédacteur',
            'email' => 'reda@reda.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 3,
            'photo' => '3.jpg',
            'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
        DB::table('users')->insert([
            'name' => 'Mkdir',
            'email' => 'mkdir@mkdir.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 4,
            'photo' => '2.jpg',
            'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
        DB::table('users')->insert([
            'name' => 'Iron Man',
            'email' => 'iron@iron.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 10,
            'photo' => '1.jpg',
            'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
        DB::table('users')->insert([
            'name' => 'Webmaster',
            'email' => 'web@web.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 2,
            'photo' => '1.jpg',
            'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
        DB::table('users')->insert([
            'name' => 'Sales Supervisor',
            'email' => 'sales@sales.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 9,
            'photo' => '2.jpg',
            'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
        DB::table('users')->insert([
            'name' => 'Community Manager',
            'email' => 'com@com.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 8,
            'photo' => '3.jpg',
            'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
        DB::table('users')->insert([
            'name' => 'Project Manager',
            'email' => 'pro@pro.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 5,
            'photo' => '2.jpg',
            'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
        DB::table('users')->insert([
            'name' => 'Spider Man',
            'email' => 'spider@spider.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 10,
            'photo' => '1.jpg',
            'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
        DB::table('users')->insert([
            'name' => 'Super Man',
            'email' => 'super@super.com',
            'password' => Hash::make('123456789'),
            'roles_id' => 10,
            'photo' => '2.jpg',
            'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
    }
}
