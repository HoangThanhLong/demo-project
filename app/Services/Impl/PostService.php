<?php


namespace App\Services\Impl;


use App\Post;
use App\Repository\Contract\PostRepositoryInterface;
use App\Services\PostServiceInterface;
use Illuminate\Support\Facades\Storage;

class PostService implements PostServiceInterface
{
    public $postRepositoryInterface;
    public function __construct(PostRepositoryInterface $postRepositoryInterface)
    {
        $this->postRepositoryInterface = $postRepositoryInterface;
    }

    public function getAll()
    {
        $posts = $this->postRepositoryInterface->getAll();
        return $posts;
    }

    public function findById($id)
    {
        $post = $this->postRepositoryInterface->findById($id);
        return $post;
    }

    public function create($request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->tags = $request->tags;
        $post->status = $request->status;
        $post->date = $request->date;
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $post->image = $path;
        }
        $post->user_id = $request->user_id;
        $this->postRepositoryInterface->create($post);
    }

    public function edit($request, $id)
    {
        $post = $this->postRepositoryInterface->findById($id);
        $post->title = $request->title;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->tags = $request->tags;
        $post->status = $request->status;
        $post->date = $request->date;
        if ($request->hasFile('image')) {
            $currentImg = $post->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $post->image = $path;

        }
        $this->postRepositoryInterface->edit($post);
    }

    public function destroy($id)
    {
        $profile = $this->postRepositoryInterface->findById($id);
        $image = $profile->image;
        if ($image){
            Storage::delete('/public/'.$image);
        }
        $this->postRepositoryInterface->destroy($profile);
    }
}
