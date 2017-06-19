<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Devanand',
            'email' => 'dev.ryder88@gmail.com',
            'password' => bcrypt('Idontknow'),
        ]);

        
    }
}
