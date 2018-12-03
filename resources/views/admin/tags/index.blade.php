@extends('layouts.app')

@section('content')

<div class="card">
        <div class="card-header text-center"><h2>Tags</h2></div>
        <br>
        <center>
            <div class="col-10 text-center">
                <table class="table">
                        <thead>
                            <tr>
                                <th>Tag</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if($tags->count() > 0)  
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{$tag->tag}}</td>
                                <td><a href="{{route('tag.edit',['id'=> $tag->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                                <td><a href="{{route('tag.destroy',['id'=> $tag->id])}}" class="btn btn-xs btn-danger">Delete</a></td>
                                </tr>   
                            @endforeach
                           @else
                            <tr>
                              <th class="text-center display-3" colspan="8" style="color:cornflowerblue"> No Tags yet!</th>
                            </tr>     
                          @endif  
                        </tbody>
                    </table>
                </div>
        </center>        
        </div>
    </div>


@endsection