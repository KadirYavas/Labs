<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'role' => 'WebMaster',
        ]);
        DB::table('roles')->insert([
            'role' => 'Rédacteur',
        ]);
        DB::table('roles')->insert([
            'role' => 'CEO',
        ]);
        DB::table('roles')->insert([
            'role' => 'Project Manager',
        ]);
        DB::table('roles')->insert([
            'role' => 'Director',
        ]);
        DB::table('roles')->insert([
            'role' => 'PDG',
        ]);
        DB::table('roles')->insert([
            'role' => 'Community Manager',
        ]);
        DB::table('roles')->insert([
            'role' => 'Sales Supervisor',
        ]);
        DB::table('roles')->insert([
            'role' => 'Visiteur',
        ]);
    }
}
