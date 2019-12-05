<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = new \App\Profile();
        $profile->id = "1";
        $profile->name = "Pham Anh Duc";
        $profile->phone = "0900xxxx";
        $profile->gender = "Nam";
        $profile->address = "Co nhue";
        $profile->birthday = "xx/xx/1991";
        $profile->image = "storage/image/anh-1";
        $profile->save();

        $profile = new \App\Profile();
        $profile->id = "2";
        $profile->name = "Hoang Van Long";
        $profile->phone = "0900xxxx";
        $profile->gender = "Nam";
        $profile->address = "Co nhue";
        $profile->birthday = "xx/xx/1991";
        $profile->image = "storage/image/anh-2";
        $profile->save();

        $profile = new \App\Profile();
        $profile->id = "3";
        $profile->name = "Luong Tuan Anh";
        $profile->phone = "0900xxxx";
        $profile->gender = "Nam";
        $profile->address = "Co nhue";
        $profile->birthday = "xx/xx/1991";
        $profile->image = "storage/image/anh-3";
        $profile->save();
    }
}
