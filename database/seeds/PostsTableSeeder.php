<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post();
        $post->id = "1";
        $post->title = "Day la toi";
        $post->content = "Mo dau cua ket thuc";
        $post->tag = "Nhat ky";
        $post->status = "bla bla bla ...";
        $post->image = "storage/image/anh-1";
        $post->user_id = "1";
        $post->save();

        $post = new \App\Post();
        $post->id = "2";
        $post->title = "Day la Ban";
        $post->content = "Ket thuc cua mo dau";
        $post->tag = "Nhat ky";
        $post->status = "bla bla bla ...";
        $post->image = "storage/image/anh-2";
        $post->user_id = "1";
        $post->save();

        $post = new \App\Post();
        $post->id = "3";
        $post->title = "Day la toi";
        $post->content = "Mo dau cua mo dau";
        $post->tag = "Nhat ky";
        $post->status = "bla bla bla ...";
        $post->image = "storage/image/anh-3";
        $post->user_id = "3";
        $post->save();
    }
}
