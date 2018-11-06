<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jurrian',
            'email' => 'jurrianlammerts@gmail.com',
            'password' => bcrypt('jurrian'),
        ]);
        DB::table('admins')->insert([
            'name' => 'Jurrian',
            'email' => 'jurrian@lammerts.net',
            'password' => bcrypt('jurrian'),
        ]);
    }
}
