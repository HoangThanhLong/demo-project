<?php

namespace App\Http\Controllers;

use App\Services\Impl\PostService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    protected $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
    public function index(){
        $posts = $this->postService->getAll();
        return view('posts.list', compact('posts'));
    }
    public function create(){
        $users = User::all();
        return view('posts.create', compact('users'));
    }
    public function store(Request $request){
        $this->postService->create($request);
        Session::flash('success', 'Tạo thành công');

        return redirect()->route('posts.list');
    }
    public function show($id){
        $post = $this->postService->findById($id);
        return view('posts.show', compact('post'));
    }
    public function edit($id){
        $post = $this->postService->findById($id);
        $users = User::all();
        return view('posts.edit', compact('post', 'users'));
    }
    public function update(Request $request, $id){
        $this->postService->edit($request, $id);
        Session::flash('success', 'Sửa thành công');

        return redirect()->route('posts.list');
    }
    public function destroy($id){
        $this->postService->destroy($id);
        Session::flash('success','Xóa thành công');

        return redirect()->route('posts.list');
    }

}
