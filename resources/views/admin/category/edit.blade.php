@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<br>
<div class="card">
<div class="card-header text-center"><h2>Edit Category:</h2>" {{$category->name}} "</div>

        <div class="card-body">
            <form action="{{ route('category.update',['id'=> $category->id]) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" name="name" value="{{$category->name}}" class="form-control">
            </div>
            <div class="form-group">
                <div class="text-center">
                     <button class="btn btn-primary" type="submit" >Update Category</button>
                </div>
            </div>
            </form>
        </div>
    </div>


@endsection