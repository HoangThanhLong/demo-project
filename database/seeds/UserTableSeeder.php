<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = "admin1@gmail.com";
        $user->password = "123456789";
        $user->save();

        $user = new \App\User();
        $user->name = 'user';
        $user->email = "user1@gmail.com";
        $user->password = "123456789";
        $user->save();
    }
}
