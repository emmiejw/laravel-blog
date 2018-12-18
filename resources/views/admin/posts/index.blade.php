@extends('layouts.app')

@section('content')

<div class="card">
        <div class="card-header text-center"><h2>Posts</h2></div>
        <br>
        <center>
            <div class="col-10 text-center">
                <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Title</th>
                                {{-- <th>Category</th> --}}
                                <th>Content</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if($posts->count() > 0)  
                            @foreach ($posts as $post)
                                <tr>
                                    <td><img src="{{ $post->featured }}" width="90px" height="50px"></td>
                                    {{-- <td>{{$post->category->name}}</td>                                     --}}
                                    <td><b>{{$post->title}}</b></td>
                                    <td>{{$post->content}}</td>         
                                    <td><a href="{{route('post.edit',['id'=> $post->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                                    <td><a href="{{route('post.destroy', ['id' => $post->id]) }}" class="btn btn-xs btn-danger">Trash</a></td>                                         
                                </tr>   
                            @endforeach
                            @else
                            <tr>
                              <th class="text-center display-3" colspan="8" style="color:cornflowerblue"> No Published Posts!</th>
                            </tr>     
                          @endif  
                        </tbody>
                    </table>
                </div>
        </center>        
        </div>
    </div>


@endsection