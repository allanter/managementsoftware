<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    Users::create(array(
        'name'     => 'Chris',
        'username' => 'Jericho',
        'email'    => 'chris@hotmail.com',
        'password' => bcrypt('secret'),
    ));
}

}