@extends('layouts.app')

@section('content')

<div class="card">
        <div class="card-header text-center"><h2>Categories</h2></div>
        <br>
        <center>
            <div class="col-10 text-center">
                <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if($categories->count() > 0)  
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                <td><a href="{{route('category.edit',['id'=> $category->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                                <td><a href="{{route('category.destroy',['id'=> $category->id])}}" class="btn btn-xs btn-danger">Delete</a></td>
                                </tr>   
                            @endforeach
                           @else
                            <tr>
                              <th class="text-center display-3" colspan="8" style="color:cornflowerblue"> No Published Categories!</th>
                            </tr>     
                          @endif  
                        </tbody>
                    </table>
                </div>
        </center>        
        </div>
    </div>


@endsection