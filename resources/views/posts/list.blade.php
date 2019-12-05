@extends('admin.layout-admin')
@section('content')
    <h1 style="text-align: center">List Post</h1>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Title</th>
            <th scope="col">Tags</th>
            <th scope="col">Status</th>
            <th scope="col">Date</th>
            <th scope="col">Author</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $key=>$post)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->tags}}</td>
            <td>{{$post->status}}</td>
            <td>{{$post->date}}</td>
            <td></td>
            <td>
                @if($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt=""
                         style="width: 50px; height: 50px">
                @else
                    {{'Chưa có ảnh'}}
                @endif
            </td>
            <td>
                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-outline-primary"><i class="fa fa-pencil"></i></a>
                <a href="{{route('posts.destroy', $post->id)}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure???')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection
