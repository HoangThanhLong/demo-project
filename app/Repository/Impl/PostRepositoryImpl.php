<?php


namespace App\Repository\Impl;


use App\Post;
use App\Repository\Contract\PostRepositoryInterface;
use App\Repository\Eloquent\PostEloquentRepository;

class PostRepositoryImpl extends PostEloquentRepository implements PostRepositoryInterface
{

    public function getModel()
    {
        $model = Post::class;
        return $model;
    }
}
