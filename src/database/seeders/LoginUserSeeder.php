<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoginUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name' => 'owner',
            'email' => 'owner@example.com',
            'password' => Hash::make('password'),
            'admin_level' => 1,
        ]);
        DB::table('admin')->insert([
            'name' => 'sub',
            'email' => 'sub@example.com',
            'password' => Hash::make('password'),
            'admin_level' => 0,
        ]);
    }
}
