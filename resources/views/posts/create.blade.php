@extends('admin.layout-admin')
@section('content')

    <h2 style="text-align: center">Create Post</h2>
        <div class="card-body">
            <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>Tags</label>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" rows="3" id="editor1" name="content"></textarea>
                </div>
                <div class="form-group">
                    <label>Status:</label><br>
                    <input type="radio" name="status" value="watching">Watching
                    <input type="radio" name="status" value="watched">Watched
                </div>
                <div class="form-row">
                <div class="col">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control">
                </div>
                    <div class="col">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
@endsection
