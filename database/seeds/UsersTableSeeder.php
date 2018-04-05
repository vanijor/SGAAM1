<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'admin',
            'email'    => 'admin@hotmail.com',
            'password' => bcrypt('123456'),
            'type'     => 'A', 
        ]);
        User::create([
            'name'     => 'professor',
            'email'    => 'professor@hotmail.com',
            'password' => bcrypt('123456'),
            'type'     => 'P',
        ]);
        User::create([
            'name'     => 'balconista',
            'email'    => 'balconista@hotmail.com',
            'password' => bcrypt('123456'),
            'type'     => 'B',
        ]);
    }
}
