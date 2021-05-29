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
            'name' => 'Luiz Junior',
            'email' => 'luiz.junior',
            'password' => bcrypt('Jr2587'),
        ]);

        DB::table('users')->insert([
            'name' => 'Priscila Nunes',
            'email' => 'priscila.nunes',
            'password' => bcrypt('estrela2'),
        ]);
    }
}
