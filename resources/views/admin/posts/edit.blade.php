@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<br>
<div class="card">
<div class="card-header text-center"><h2>Edit Post</h2></div>

        <div class="card-body">
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
            <input type="text" name="title" value="{{$post->title}}" class="form-control">
            </div>
            {{-- <div class="form-group">
                <label for="featured">Featured Image</label>
                <input type="file" name="featured" value="{{$post->featured}}" class="form-control">
            </div> --}}
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
          </div>
            <div class="form-group">
                <div class="text-center">
                     <button class="btn btn-primary" type="submit" >Update Post</button>
                </div>
            </div>
            </form>
        </div>
    </div>


@endsection